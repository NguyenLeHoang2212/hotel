<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductCategory extends Controller
{
    public function index(){


        return view('admin.pages.product.list');
    }

    public function add(){
        return view('admin.pages.productcategory.productadd');
    }
}
