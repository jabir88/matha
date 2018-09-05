<?php

namespace App\Http\Controllers;

use App\Product;
use Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add_to_cart(Request $req)
    {
      $qty =$req->qty;
      $pro_id =$req->pro_id;
      $my =  Product::findOrFail($pro_id);
      Cart::add(['id' => $pro_id, 'name' => $my->product_name, 'qty' => $qty, 'price' =>$my->product_price, 'options' => ['image' => $my->product_img]]);
      return redirect('/show-cart');
    }
    public function show_cart()
    {
      return view('forntEnd.cart.cartContent');
    }
    public function delete_cart($rowId)
    {
      Cart::update($rowId, 0);
      return back();
    }
    public function update_cart(Request $req)
    {
      $rowId =$req->rowId;
      $qty =$req->qty;
      Cart::update($rowId , $qty);
      return back();

    }
}
