<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
            'description' => 'required'
        ]);
        $title = $request['title'];
        $price = $request['price'];
        $description = $request['description'];
        $product->title = $title;
        $product->price = $price;
        $product->description = $description;
        $product->save();
        // images 
        $request->validate(['image' => 'required']);
        foreach ($request->file('image') as $image) {
            $upload_image_name = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('images'), $upload_image_name);
            $name[] = $upload_image_name;
            $pic = new Picture(['path' => 'images/' . $upload_image_name]);
            $product->pictures()->save($pic);
        }

        // flash message redirect back
        session()->flash('success', 'Suuecssfully Add Product');
        return redirect('dashboard/product');
    }

    // update product

    public function edit($id)
    {
        $product = Product::with('pictures')->find($id);
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
        // images 
        $request->validate(['image' => 'required']);
        foreach ($request->file('image') as $image) {
            $upload_image_name = time() . '-' . $image->getClientOriginalName();
            $image->move(public_path('images'), $upload_image_name);
            $name[] = $upload_image_name;
            $pic = new Picture(['path' => 'images/' . $upload_image_name]);
            $product->pictures()->save($pic);
        }
        session()->flash('success', 'Suuecssfully Update Product');
        return redirect('dashboard/product');
    }
    // delete product
    public function delete($id)
    {
        Product::find($id)->delete();
        session()->flash('success', 'Suuecssfully Remove Product');
        return redirect('dashboard/product');
    }

    // remove uploade image product

    public function removeImage($id)
    {
        $url = url()->previous();
        $e = explode('/', $url);
        $end = end($e);

        Picture::find($id)->delete();
        session()->flash('success', 'Suuecssfully Remove Product');
        return redirect("dashboard/product/update/$end");
    }
}
