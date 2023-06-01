<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
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
    $validator = Validator::make($request->all(), [
        'name' => 'required|regex:/^[A-Za-z]/',
        'description' => 'required|regex:/^[A-Za-z]/',
        'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
        'region_id' => 'required',
        'category_id' => 'required',
        'images' => 'required|array',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ], [
        'name.required' => 'The name field is required.',
        'name.regex' => 'The name must start with a letter.',
        'description.required' => 'The description field is required.',
        'description.regex' => 'The description must start with a letter.',
        'price.required' => 'The price field is required.',
        'price.regex' => 'The price must be a valid numeric value.',
        'region_id.required' => 'The region field is required.',
        'category_id.required' => 'The category field is required.',
        'images.required' => 'At least one image is required.',
        'images.array' => 'The images must be an array.',
        'images.*.image' => 'The file must be an image.',
        'images.*.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif.',
        'images.*.max' => 'The image size must not exceed 2048 kilobytes.',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $item = new Item;
    $item->name = $request->input('name');
    $item->description = $request->input('description');
    $item->is_available = '1';
    $item->price = $request->input('price');
    $item->vendor_id = auth()->id();
    $item->region_id = $request->input('region_id');
    $item->category_id = $request->input('category_id');
    $item->save();

    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $file) {
            if ($file->isValid()) {
                $filename = uniqid() . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('public/item_images', $filename);
                $itemImage = new Item_images;
                $itemImage->item_id = $item->id;
                $itemImage->image_path = $filename;
                $itemImage->save();
            }
        }
    }

    // Redirect to a success page or perform any other desired actions
    return redirect()->route('shopping')->with('success', 'Product has been added successfully.');
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
        $img = Item_images::where('Item_images.item_id', $product->id)->get();
        $items = Item::where('id', '!=', $id)->latest()->take(6)->get();
        $p_img = Item_images::all();
        $vendor = User::findOrFail($product->vendor_id);
            
        return  view('shop_part.product')->with('product', $product)->with('img', $img)->with('items', $items)->with('p_img', $p_img)->with('vendor', $vendor);
    }
    
   

   

}
