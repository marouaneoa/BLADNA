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
        $user = Auth::user();
        $cartItems = Cart::where('user', $user->id)->get();

        return view('shop_part.cart');
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
    $item = Cart::findOrFail($id);
    $item->delete();

    return redirect('/shopping')->with('success', 'product has been removed from cart');
}



}
