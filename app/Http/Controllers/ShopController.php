<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Models\Items;
use App\Models\Item_images;
use App\Models\Categories;
use App\Models\Region;
use App\Models\User;


class ShopController extends Controller
{
    public function index()
    {
      
        $items = Items::join('users', 'items.vendor_id', '=', 'users.id')
        ->join('regions', 'items.region_id', '=', 'regions.id')
        ->join('categories', 'items.category_id', '=', 'categories.id')
        ->select('items.*', 'users.name as vendor', 'regions.name as region', 'categories.name as category')
        ->get();
        $categories = Categories::all();
        $regions = Region::all();
        $vendor = User::all();
        $p_img = Item_images::all();
        
        return view('home')->with('items',$items)->with('categories',$categories)->with('regions',$regions)->with('vendor',$vendor)->with('p_img',$p_img);
    }
    public function store(Request $request)
    {
        $items= new Items;
        $items->name= $request->input('name');
        $items->description= $request->input('description');
        $items->is_available = 'yes';
        $items->price= $request->input('price');
        $items->vendor_id= $user = Auth::user();;
        $items->region_id= $request->input('region_id');
        $items->category_id= $request->input('category_id');
        $items->save();
       
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                if ($file->isValid()) {
                    $filename = uniqid() . '.' . $file->getClientOriginalExtension();
                    $path = $file->storeAs('public/item_images', $filename);
                    $itemImage = new Item_images;
                    $itemImage->item_id = $items->id;
                    $itemImage->image_path = $filename; // Update the image path to use the filename instead of the storage path
                    $itemImage->save();
                }
            }
        }

        return redirect('/shopping')->with('status', 'Item has been added');
    }

}
