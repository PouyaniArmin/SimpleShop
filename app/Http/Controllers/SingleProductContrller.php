<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SingleProductContrller extends Controller
{
  public function index($id)
  {
    $product = Product::with('pictures')->find($id); 
    // dd($product['pictures'][0]['path']);
    return view('singelProduct',compact('product'));
  
  }
}
