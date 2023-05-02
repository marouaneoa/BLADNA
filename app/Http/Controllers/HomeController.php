<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use App\Models\Items;
use App\Models\Categories;
use App\Models\Region;
use App\Models\User;
use App\Models\Item_images;
>>>>>>> c3a24439031e5aa6c66163ffb21b2f2718cfd350

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

<<<<<<< HEAD
=======

>>>>>>> c3a24439031e5aa6c66163ffb21b2f2718cfd350
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
<<<<<<< HEAD
        return view('home');
=======
      
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
>>>>>>> c3a24439031e5aa6c66163ffb21b2f2718cfd350
    }
}
