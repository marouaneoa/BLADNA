<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use App\Models\Item_images;
use App\Models\Category;
use App\Models\Region;
use App\Models\User;


class ShopController extends Controller
{
    public function index()
    {
      
        $items = Item::join('users', 'items.vendor_id', '=', 'users.id')
        ->join('regions', 'items.region_id', '=', 'regions.id')
        ->select('items.*', 'users.name as vendor', 'regions.name as region')
        ->get();
        $categories = Category::all();
        $regions = Region::all();
        $vendor = User::all();
        $p_img = Item_images::all();
        
        return view('shop_part.shopping')->with('items',$items)->with('categories',$categories)->with('regions',$regions)->with('vendor',$vendor)->with('p_img',$p_img);
    }


    public function add_product()
    {
      
      
        $categories = Category::all();
        $regions = Region::all();
     
        return view('shop_part.add_product')->with('categories',$categories)->with('regions',$regions);
    }
    
    public function store(Request $request)
    {
        $items= new Item;
        $items->name= $request->input('name');
        $items->description= $request->input('description');
        $items->is_available = '1';
        $items->price= $request->input('price');
        $items->vendor_id = auth()->id();
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
                    $itemImage->image_path = $filename;
                    $itemImage->save();
                }
            }
        }

        return redirect('shopping')->with('status', 'Item has been added');
    }
    public function more($id){

        $category = Category::find($id);

        $items = Item::join('users', 'items.vendor_id', '=', 'users.id')
            ->join('regions', 'items.region_id', '=', 'regions.id')
            ->join('categories', 'items.category_id', '=', 'categories.id')
            ->where('items.category_id', $category->id) // Filter by category ID
            ->select('items.*', 'users.name as vendor', 'regions.name as region', 'categories.name as category')
            ->get();
       
        $p_img = Item_images::all();
        
        return view('shop_part.more')->with('items',$items)->with('category',$category)->with('p_img',$p_img);

        
    }
    

    public function product($id)
    {
        $product = Item::findOrFail($id);
        $img = Item_images::where('Item_images.item_id', $product->id);
        $items = Item::where('id', '!=', $id)->latest()->take(6)->get();
        $p_img = Item_images::all();
            
        return  view('shop_part.product')->with('product', $product)->with('img', $img)->with('items', $items)->with('p_img', $p_img);
    }
    
   

   

}
