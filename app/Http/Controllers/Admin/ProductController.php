<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\StoreProductCategoryRequest;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Support\Str;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = DB::table('products')->paginate(1);
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
    public function store(StoreProductCategoryRequest $request)
    {

        $check = DB::table('products')->insert([
            "name" => $request->name,
            "slug" => $request->slug,
            "price" => $request->price,
            "discount_price" => $request->discount_price,
            "qty" => $request->qty,
            "shipping" => $request->shipping,
            "weight" => $request->weight,
            "information" => $request->information,
            "image" => $request->image,
            "status" => $request->status,
            "product_category_id" => $request->product_category_id,
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()

        ]);
        $message = $check ? "create thành công r bé ơi " : "thất bại" ;
            return redirect()->route('admin.product.index')->with('message',$message);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function createSlug(Request $request){
        $name = $request->name ;
        // $Array = explode('',$name);
        // $name = implode('-',$Array);
        $slug = Str::slug($request->name, '-');

        return response()->json(['slug' => $slug]);
    }
}
