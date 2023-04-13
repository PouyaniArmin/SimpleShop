<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session as FacadesSession;

class ProductManagementController extends Controller
{
    public function index()
    {
        return view('dashboard.productDashboard');
    }
    public function create()
    {
        return view('dashboard.product.create');
    }
    public function insert(Request $request)
    {
        $product = new Product();
        $this->validate($request, [
            'title'=>'required',
            'price'=>'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'description'=>'required',
        ]);
        
        $title=$request['title'];
        $price=$request['price'];
        $imageName=time().'.'.$request->image->extension();
        $description=$request['description'];
        $path='images/'.$imageName;
        $request->image->move(public_path('images'),$imageName);
        $product->title=$title;
        $product->price=$price;
        $product->pic=$path;
        $product->description=$description;
        $product->save();
        session()->flash('success','Suuecssfully Add Product');
        return redirect('dashboard/product');
        
    }
}
