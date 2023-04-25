<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        return view('cart');
    }
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'title' => $product->title,
                'price' => $product->price,
                'quantity' => 1
            ];
        }
        session()->put('cart', $cart);
        session()->flash('cart-success', 'Suuecssfully Add Product to Cart');
        return redirect('/product');
    }
    public function plusCart(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            $cart[$request->id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back();
        }
    }
    public function minusCart(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            $cart[$request->id]['quantity']--;
            session()->put('cart', $cart);
            return redirect()->back();
        }
    }
    public function removeCart(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if ($cart[$request->id]) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            return redirect()->back();
        }
    }
}
