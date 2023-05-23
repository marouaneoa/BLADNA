<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Items;
use App\Models\Item_images;
use App\Models\Categories;
use App\Models\Region;
use App\Models\User;

class ItemController extends Controller
{
    public function index()
{
    $items = Items::all();

    $categories = Categories::all();
    $regions = Region::all();
    $vendor = User::all();

    return view('admin.items')->with('items',$items)->with('categories',$categories)->with('regions',$regions)->with('vendor',$vendor);
}

    public function store(Request $request)
    {
        $items= new Items;
        $items->name= $request->input('name');
        $items->description= $request->input('description');
        $items->is_available= $request->input('is_available');
        $items->price= $request->input('price');
        $items->vendor_id= $request->input('vendor_id');
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

        return redirect('/items')->with('status', 'Item has been added');
    }

    public function edit($id)
    {   

        $items = Items::findOrFail($id);
        return view('admin.items.edit')->with('items',$items);
    }

    public function update(Request $request, $id)
    {
       
        $items = Items::find($id);
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
        $items = Items::findOrFail($id);
        $items->delete();

        return redirect('/items')->with('success', 'Item has been deleted');
    }
    
}
