<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        $cartItems = Cart::content();
        return view('cart.index',compact('cartItems'));
    }
    
    public function create()
    {

    }

    public function edit($id)
    {
        $product = Product::find($id);
        Cart::add($product->id, $product->name, 1, $product->price, ['size' => 'large']);
        return back();
    }

    public function update(Request $request,$id)
    {
        Cart::update($id, ['qty'=>$request->qty,'options'=>['size'=>$request->size]]);
        return back();
    }

    public function destroy($id)
    {
        Cart::remove($id);
        return back();
    }
    
}


?>