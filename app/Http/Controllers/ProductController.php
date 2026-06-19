<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class ProductController extends Controller
{
    public function create(){

        $users=User::all();
        return view('product.create',compact('users'));

    }

    public function store(Request $request){

     Product::create($request->all());



    }
}
