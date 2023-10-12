<?php

namespace App\Http\Controllers\Client;

use App\Events\PlaceOrderSuccess;
use App\Http\Controllers\Controller;
use App\Mail\MailToAdmin;
use App\Mail\MailToCustomer;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\OrderPaymentMethod;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;



class OrderController extends Controller
{
    public function placeOrder(Request $request){
        try{
            DB::beginTransaction();
            $order = new Order;
        $order->user_id = Auth::user()->id;
        $order->address = $request->address;
        $order->note = $request->note;
        $order->status = Order::STATUS_PENDING;


        $order->save();


        $carts = session()->get('carts', []);
        $total = 0;
        foreach($carts as $product => $item){
            $orderItems = new OrderItem;
            $orderItems->order_id = $order->id;
            $orderItems->product_id = $product;
            $orderItems->product_name = $item['name'];
            $orderItems->product_price = $item['discount_price'];
            $orderItems->qty = $item['qty'];
            $orderItems->save();
            $total += $item['discount_price'] * $item['qty'];
        }

        $order->subtotal = $total;
        $order->total = $total;
        if($total > 0){
            $order->save();

            $oderPaymentMethod = new OrderPaymentMethod;
            $oderPaymentMethod->order_id = $order->id;
            $oderPaymentMethod->payment_provider = $request->payment_method;
            $oderPaymentMethod->status = OrderPaymentMethod::STATUS_PENDING;
            $oderPaymentMethod->$total;
            $oderPaymentMethod->save();
    
            //update 1 eloquent
            $user = User::find(Auth::user()->id);
            $user->phone = $request->phone;
            $user->save();
    
    
            session()->put('carts',[]);
    
            DB::commit();
    
    
            if($request->payment_method === 'vnpay'){
                date_default_timezone_set('Asia/Ho_Chi_Minh');
    
                $vnp_TxnRef = $order->id; //Mã giao dịch thanh toán tham chiếu của merchant
                $vnp_Amount = $order->total; // Số tiền thanh toán
                $vnp_Locale = 'en'; //Ngôn ngữ chuyển hướng thanh toán
                $vnp_BankCode = 'VNBANK'; //Mã phương thức thanh toán
                $vnp_IpAddr = $_SERVER['REMOTE_ADDR']; //IP Khách hàng thanh toán
    
                $vnp_TmnCode = 'PUEN5D41';
                $vnp_HashSecret = "HOTFMHEKKTGITZXOWUHWZRDRHVSUEXXG"; //Secret key
                $vnp_Returnurl = route('vnpay-callback');
                $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
    
                $startTime = date("YmdHis");
                $expire = date('YmdHis',strtotime('+15 minutes',strtotime($startTime)));
    
                $inputData = array(
                    "vnp_Version" => "2.1.0",
                    "vnp_TmnCode" => $vnp_TmnCode,
                    "vnp_Amount" => $vnp_Amount* 100,
                    "vnp_Command" => "pay",
                    "vnp_CreateDate" => date('YmdHis'),
                    "vnp_CurrCode" => "VND",
                    "vnp_IpAddr" => $vnp_IpAddr,
                    "vnp_Locale" => $vnp_Locale,
                    "vnp_OrderInfo" => "Thanh toan GD:". $vnp_TxnRef,
                    "vnp_OrderType" => "other",
                    "vnp_ReturnUrl" => $vnp_Returnurl,
                    "vnp_TxnRef" => $vnp_TxnRef,
                    "vnp_ExpireDate"=>$expire
                );
    
                if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                    $inputData['vnp_BankCode'] = $vnp_BankCode;
                }
    
                ksort($inputData);
                $query = "";
                $i = 0;
                $hashdata = "";
                foreach ($inputData as $key => $value) {
                    if ($i == 1) {
                        $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                    } else {
                        $hashdata .= urlencode($key) . "=" . urlencode($value);
                        $i = 1;
                    }
                    $query .= urlencode($key) . "=" . urlencode($value) . '&';
                }
    
                $vnp_Url = $vnp_Url . "?" . $query;
                if (isset($vnp_HashSecret)) {
                    $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//
                    $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
                }
                return Redirect::to($vnp_Url);
            }
    
            event(new PlaceOrderSuccess($order, $user, $carts));
            // Mail::to(config('my-config.admin-email'))->send(new MailToAdmin($order, $user));
            // Mail::to('hoang19992212@gmail.com')->send(new MailToCustomer($order));
    
    
            return redirect()->route('home');
        }
        else return redirect()->route('product.all');



        }catch(\Exception $exception){
        DB::rollback();

        }

    }


    public function vnpayCallback(Request $request){
        $order = Order::find($request->vnp_TxnRef);
        if($request->vnp_ResponseCode === '00'){
            $order->status = Order::STATUS_SUCCESS;
            $order->save();

            $user = User::find($order->user_id);

            $carts = [];
            foreach($order->order_items as $item){
                $product = Product::find($item->product_id);
                $imagesLink = is_null($product->image)
                || !file_exists('images/' . $product->image)
                ? 'https://phutungnhapkhauchinhhang.com/wp-content/uploads/2020/06/default-thumbnail.jpg'
                : asset('images/' . $product->image);
                $carts[$item->product_id] = [
                    'name' => $item->product_name,
                    'discount_price' => $item->product_price,
                    'image' => $imagesLink,
                    'qty' => $item->qty
                ];
            }

            $oderPaymentMethod = $order->order_payment_methods[0];
            $oderPaymentMethod->status = OrderPaymentMethod::STATUS_SUCCESS;
            $oderPaymentMethod->note = $request->vnp_OrderInfo;

            $oderPaymentMethod->save();
            // Mail::to(config('my-config.admin-email'))->send(new MailToAdmin($order, $user));
            // Mail::to('hoang19992212@gmail.com')->send(new MailToCustomer($order));
            event(new PlaceOrderSuccess($order, $user, $carts));
            $message = 'OK';
        }else{
            $order->status = Order::STATUS_FAILED;
            $order->save();

            $oderPaymentMethod = $order->order_payment_methods[0];
            $oderPaymentMethod->status = 'failed';
            $oderPaymentMethod->note = 'Giao dịch không thành công do: Khách hàng xác thực thông tin thẻ/tài khoản không đúng quá 3 lần';
            $oderPaymentMethod->save();
            $message = 'FAILED';
        }

        return redirect()->route('home')->with('message', $message);
    }
}
