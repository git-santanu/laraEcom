<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class productControl extends Controller
{
    //
    function addProduct(Request $req)
    {
        // $products= new product;
        // $products->pname = $req->input('pname');
        $req->file('file_path')->store('products');
        return "ok";
        // $products->desc = $req->input('desc');
        // $products->price = $req->input('price');
        // $products->save();
        // return $products;

    }
}
