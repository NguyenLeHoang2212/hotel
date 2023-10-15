<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    // view page all customer
    public function allCustomers()
    {
        $allCustomers = DB::table('customers')->get();
        return view('admin.pages.customer.allcustomers',compact('allCustomers'));
    }

    // add Customer
    public function addCustomer()
    {
        $data = DB::table('room_types')->get();
        $user = DB::table('users')->get();
        return view('admin.pages.customer.addcustomer',compact('data','user'));
    }
    // save record
    public function saveCustomer(CustomerRequest $request)
    {



            $customer = new Customer;

            $customer->bkg_customer_id = $request->bkg_customer_id;

            $customer->name = $request->name;
            $customer->room_type     = $request->room_type;
            $customer->total_numbers  = $request->total_numbers;
            $customer->date  = $request->date;
            $customer->time  = $request->time;
            $customer->arrival_date   = $request->arrival_date;
            $customer->depature_date  = $request->depature_date;
            $customer->email       = $request->email;
            $customer->ph_number   = $request->ph_number;
            $customer->message     = $request->message;
            $customer->save();

            $result = $customer->save();
            $alert = $result ? 'create success' : 'create failed';
            return redirect()
            ->route('admin.allcustomers')
            ->with('message', $alert);

    }

    // customer edit
    public function updateCustomer($bkg_customer_id)
    {
        $customerEdit = DB::table('customers')->where('bkg_customer_id',$bkg_customer_id)->first();
        return view('admin.pages.customer.editcustomer',compact('customerEdit'));
    }

    // update record
    public function updateRecord(Request $request)
    {
        DB::beginTransaction();
        try {



            $update = [
                'bkg_customer_id' => $request->bkg_customer_id,
                'name'   => $request->name,
                'room_type'  => $request->room_type,
                'total_numbers' => $request->total_numbers,
                'date'   => $request->date,
                'time'   => $request->time,
                'arrival_date'   => $request->arrival_date,
                'depature_date'  => $request->depature_date,
                'email'   => $request->email,
                'ph_number' => $request->ph_number,
                'message'   => $request->message,
            ];
            Customer::where('bkg_customer_id',$request->bkg_customer_id)->update($update);

            DB::commit();
            return redirect()->route('admin.allcustomers');
        } catch(\Exception $exception) {
            DB::rollback();
            return redirect()->back();
        }
    }
    // delete record
    public function deleteRecord($bkg_customer_id)
    {
        $destroy = DB::delete('delete from customers where id = ? ',[$bkg_customer_id]);
        $message = $destroy >0 ? "success " : "failed" ;
        return redirect()->route('admin.allcustomers')->with('message',$message);
    }

}