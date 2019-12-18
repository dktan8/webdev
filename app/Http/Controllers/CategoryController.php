<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(){
        return view('categories.category');
    }

    public function addCategory(Request $request){
        return $request->input('category');
    }
}
