<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductDetailsController extends Controller
{
    public function index(Request $request){

        $product = Product::whereId($request->id)->first();

        return view('frontend.product',compact('product'));
    }
}
