<?php

namespace App\Http\Controllers\Admin;

use App\Models\Item;
use App\Models\User;
use App\Models\Region;
use App\Models\Category;

use App\Models\Item_images;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    public function index()
{
    $items = Item::all();

    $categories = Category::all();
    $regions = Region::all();
    $vendor = User::all();

    return view('admin.items')->with('items',$items)->with('categories',$categories)->with('regions',$regions)->with('vendor',$vendor);
}


public function create()
{
    $categories = Category::all();
    $regions = Region::all();

    return view('shop_part.add-item', compact('categories', 'regions'));
}


public function store(Request $request)
    {
        // Validation
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'region_id' => 'required',
            'category_id' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Create the item
        $item = new Item();
        $item->name = $request->input('name');
        $item->description = $request->input('description');
        $item->is_available = true; // Set is_available to true by default
        $item->price = $request->input('price');
        $item->vendor_id = Auth::id(); // Set vendor_id to the current authenticated user's ID
        $item->region_id = $request->input('region_id');
        $item->category_id = $request->input('category_id');
        $item->save();

        // Upload and save the images
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                if ($file->isValid()) {
                    $filename = uniqid() . '.' . $file->getClientOriginalExtension();
                    $path = $file->storeAs('public/items_images', $filename);
                    $itemImage = new ItemImages();
                    $itemImage->item_id = $item->id;
                    $itemImage->image_path = $filename;
                    $itemImage->save();
                }
            }
        }

        // Redirect or return a response
        // You can customize this based on your application's requirements
        return redirect()->back()->with('success', 'Item added successfully');
    }



    public function edit($id)
    {   

        $items = Item::findOrFail($id);
        return view('admin.items.edit')->with('items',$items);
    }




    public function update(Request $request, $id)
    {
       
        $items = Item::find($id);
        $items->name= $request->get('name');
        $items->description= $request->get('description');
        $items->is_available= $request->get('is_available');
        $items->price= $request->get('price');
        $items->vendor_id= $request->get('vendor_id');
        $items->region_id= $request->get('region_id');
        $items->category_id= $request->get('category_id');
        
        $items->update();

        return redirect('/items')->with('status', 'Item has been updated');
    }




    public function delete($id)
    {
        $items = Item::findOrFail($id);
        $items->delete();

        return redirect('/items')->with('success', 'Item has been deleted');
    }


    
    public function show(Item $item)
    {
    $latestItems = Item::with('pictures')
        ->orderBy('created_at', 'desc')
        ->take(8)
        ->get();

    $product = Item::with('pictures')->find($item->id);

    return view('shop_part.product', compact('latestItems', 'product'));
    }



}
