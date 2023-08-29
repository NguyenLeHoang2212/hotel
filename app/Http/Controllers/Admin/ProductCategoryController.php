<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
    public function store(REQUEST $request){
        // $name = $request->name;
        // $status = $request->status;

       $request->validate([
        // 'name' => ['required','min:3','max:10']
        'name' => 'required|min:3|max:10|unique:product_categories,name',
        'status' => 'required'
       ],
       [
        'name.required' => 'Tên bắt buộc phải nhập vô dùm cái',
        'name.min' => 'Nhập ít hơn 3 chữ r ',
        'name.max' => 'Nhập nhìu hơn 10 chữ r',
        'status.required' => 'Trạng thái đâu'
       ]);

       $bool = DB::insert('INSERT INTO product_categories(name,status, created_at, updated_at) VALUES (?,?,?,?)',[
            $request->name,
            $request->status,
            Carbon::now()->addDays(999)->addMonth()->addYear(),
            Carbon::now()
       ]);
      $message = $bool ? "thành công r bé ơi " : "thất bại" ;
      return redirect()->route('admin.product_category.list')->with('message',$message);
    }

    public function detail(){
        dd(1);
    }

}
