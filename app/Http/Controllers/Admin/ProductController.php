<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Support\Str;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;

use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $products = DB::table('products')->select('products.*','product_categories.name as product_category_name')->leftjoin('product_categories','products.product_category_id','=','product_categories.id')->orderBy('created_at', 'DESC')
        // ->paginate(config('my-config.item-per-pages'));
        //eloquon
        $products = Product::withTrashed()->paginate(3);
        return view('admin.pages.product.list',['products' => $products ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productCategory = DB::select('select * from product_categories where status =1');

        return view('admin.pages.product.create',['productCategory' => $productCategory]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        if($request->hasFile('image')){
            $fileOriginName = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileOriginName,PATHINFO_FILENAME); // lay ten truoc png/jpg/..
            $fileName.='_'.time().'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images'),$fileName);
        }


        $check = DB::table('products')->insert([
            "name" => $request->name,
            "slug" => $request->slug,
            "price" => $request->price,
            "discount_price" => $request->discount_price,
            "short_description" => $request->short_description,
            "description" => $request->description,

            "qty" => $request->qty,
            "shipping" => $request->shipping,
            "weight" => $request->weight,
            "information" => $request->information,
            "image" => $fileName ?? null,
            "status" => $request->status,
            "product_category_id" => $request->product_category_id,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()

        ]);
        $message = $check ? "create success  " : "failed" ;
            return redirect()->route('admin.product.index')->with('message',$message);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = DB::table('products')->find($id);
        $productCategory = DB::table('product_categories')->where('status','=',1)->get();
        return view('admin.pages.product.detail',['productCategory' => $productCategory,'product' => $product]);    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, string $id)
    {
        $product = DB::table('products')->find($id);

        $oldImage = $product->image;

        if($request->hasFile('image')){
            $fileOriginName = $request->file('image')->getClientOriginalName();
            $fileName = pathinfo($fileOriginName,PATHINFO_FILENAME); // lay ten truoc png/jpg/..
            $fileName.='_'.time().'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images'),$fileName);
            if(!is_null($oldImage) && file_exists('images/'.$oldImage)){
                unlink('images/'.$oldImage);
            }
        }
        $check = DB::table('products')->where('id','=',$id)->update([
            "name" => $request->name,
            "slug" => $request->slug,
            "price" => $request->price,
            "discount_price" => $request->discount_price,
            "qty" => $request->qty,
            "shipping" => $request->shipping,
            "weight" => $request->weight,
            "information" => $request->information,
            "image" => $fileName ?? $oldImage,
            "status" => $request->status,
            "product_category_id" => $request->product_category_id,
            "updated_at" => Carbon::now()

        ]);
        $message = $check ? "update success  " : "failed" ;
            return redirect()->route('admin.product.index',['product' => $product])->with('message',$message);
    }



    public function destroy(string $id)
    {
        // $result = DB::table('products')->where('id',$id)->delete();
        $product = DB::table('products')->find($id);
        $image = $product->image;
        if(!is_null($image) && file_exists('images/'.$image)){
            unlink('images/'.$image);
        }

        //QueryBuidlder
        // $result = DB::table('products')->delete($id);
        //ELoquent
        $productData = Product::find((int)$id);
        $productData->delete();

        //session flash
        return redirect()->route('admin.product.index')->with('message','delete success');
    }

    public function createSlug(StoreProductRequest $request){
        $name = $request->name ;
        // $Array = explode('',$name);
        // $name = implode('-',$Array);
        $slug = Str::slug($request->name, '-');

        return response()->json(['slug' => $slug]);
    }

    public function uploadImage(StoreProductRequest $request){
        if($request->hasFile('upload')){
            $fileOriginName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($fileOriginName,PATHINFO_FILENAME); // lay ten truoc png/jpg/..
            $fileName.='_'.time().'.'.$request->file('upload')->getClientOriginalExtension();
            $request->file('upload')->move(public_path('images'),$fileName);
            $url = asset('images/'.$fileName);
            return response()->json(['fileName' => $fileName , 'url' => $url , 'uploaded' => 1]);
        }
    }

    public function restore(string $id){
        $product = Product::withTrashed()->find($id);
        $product ->restore();
        return redirect()->route('admin.product.index',['product' => $product])->with('message','restore success');

    }
}
