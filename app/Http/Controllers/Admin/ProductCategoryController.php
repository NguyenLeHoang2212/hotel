<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductCategoryRequest;
use App\Http\Requests\UpdateProductCategoryRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductCategoryController extends Controller
{
    public function index(){

        $productCategories = DB::select('select * from product_categories');

        return view('admin.pages.productcategory.list', ['productCategories' => $productCategories]);
    }

    public function add(){
        return view('admin.pages.productcategory.productadd');
    }
    public function store(StoreProductCategoryRequest $request){
        // $name = $request->name;
        // $status = $request->status;
       $bool = DB::insert('INSERT INTO product_categories(name,status, created_at, updated_at) VALUES (?,?,?,?)',[
            $request->name,
            $request->status,
            Carbon::now()->addDays(999)->addMonth()->addYear(),
            Carbon::now()
       ]);
      $message = $bool ? "thành công r bé ơi " : "thất bại" ;
      return redirect()->route('admin.product_category.list')->with('message',$message);
    }

    public function detail($id){
     $productCategory = DB::select('select * from product_categories where id = ?', [$id]);
     return view('admin.pages.productcategory.detail', ['productCategory' => $productCategory[0]]);
    }

    public function update(UpdateProductCategoryRequest $request , $id){

        $update = DB::update('update product_categories SET name = ? , status = ? WHERE id = ? ', [$request->name,$request->status,$id]);
        $message = $update>0 ? "update thành công r bé ơi " : "có cái gì đâu mà up" ;
        return redirect()->route('admin.product_category.list')->with('message',$message);
    }


    public function destroy($id){
        $destroy = DB::delete('delete from product_categories where id = ? ',[$id]);
        $message = $destroy>0 ? "xóa thành công r bé ơi " : "xóa thất bại" ;
        return redirect()->route('admin.product_category.list')->with('message',$message);
    }

}
