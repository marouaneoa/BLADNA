<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use App\Models\Region;
use App\Models\User;
use App\Models\Post;
use App\Models\Picture;
use App\Models\Item_images;

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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      
        $items = Item::join('users', 'items.vendor_id', '=', 'users.id')
        ->join('regions', 'items.region_id', '=', 'regions.id')
        ->join('categories', 'items.category_id', '=', 'categories.id')
        ->select('items.*', 'users.name as vendor', 'regions.name as region', 'categories.name as category')
        ->get();
        $categories = Category::all();
        $regions = Region::all();
        $vendor = User::all();
        $p_img = Item_images::all();
        $posts = Post::with('pictures')->orderByDesc('created_at')->take(4)->get();
        
        return view('home')->with('items',$items)->with('categories',$categories)->with('regions',$regions)->with('vendor',$vendor)->with('p_img',$p_img)->with('HomePosts', $posts);
    }
    
    public function welcome()
    {
      
        $items = Item::join('users', 'items.vendor_id', '=', 'users.id')
        ->join('regions', 'items.region_id', '=', 'regions.id')
        ->join('categories', 'items.category_id', '=', 'categories.id')
        ->select('items.*', 'users.name as vendor', 'regions.name as region', 'categories.name as category')
        ->get();
        $categories = Category::all();
        $regions = Region::all();
        $vendor = User::all();
        $p_img = Item_images::all();
        $posts = Post::with('pictures')->orderByDesc('created_at')->take(4)->get();

        return view('welcome')->with('items',$items)->with('categories',$categories)->with('regions',$regions)->with('vendor',$vendor)->with('p_img',$p_img)->with('posts', $posts);
    }
}
