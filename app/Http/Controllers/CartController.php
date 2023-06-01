<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use App\Models\User;
use App\Models\Cart;


class CartController extends Controller
{
    public function index(){

    
        $cartItems = Cart::join('items', 'items.id', '=', 'carts.product')
        ->join('item_images', 'carts.product', '=', 'item_images.item_id')
        ->select('carts.id as cart_id', 'carts.*', 'items.*', 'item_images.*')
        ->where('carts.user', '=', Auth::user()->id)
        ->get();

        return view('shop_part.mycart')->with('cartItems',$cartItems);
    }



    public function add($id){
        
    $user = Auth::user();
    $cart_item = new Cart;
    $cart_item->user = $user->id;
    $cart_item->product = $id;
    $cart_item->save();

    return redirect('shopping')->with('success', 'Product added successfully');

}

public function delete($id)
{
    $item = Cart::find($id);

    $item->delete();

    return redirect('/mycart')->with('success', 'Product has been removed from the cart');
}



}
