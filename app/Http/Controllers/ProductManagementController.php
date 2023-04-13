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
        $products = Product::paginate(5);
        return view('dashboard.productDashboard', compact('products'));
    }
    public function create()
    {
        return view('dashboard.product.create');
    }
    //store to database
    public function insert(Request $request)
    {
        $product = new Product();
        $this->validate($request, [
            'title' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'description' => 'required',
        ]);

        $title = $request['title'];
        $price = $request['price'];
        $imageName = time() . '.' . $request->image->extension();
        $description = $request['description'];
        $path = 'images/' . $imageName;
        $request->image->move(public_path('images'), $imageName);
        $product->title = $title;
        $product->price = $price;
        $product->pic = $path;
        $product->description = $description;
        $product->save();
        session()->flash('success', 'Suuecssfully Add Product');
        return redirect('dashboard/product');
    }

    // update product

    public function edit($id)
    {
        $product = Product::find($id);
        return view('dashboard.product.update', compact('product'));
    }
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $body = $request->validate([
            'title' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);
        $product->update([
            'title' => $body['title'],
            'price' => $body['price'],
            'description' => $body['description']
        ]);
        session()->flash('success', 'Suuecssfully Update Product');
        return redirect('dashboard/product');
    }
    // delete product
    public function delete($id){
        Product::find($id)->delete();
        session()->flash('success', 'Suuecssfully Remove Product');
        return redirect('dashboard/product');
    }

}
