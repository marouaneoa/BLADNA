<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;

class CategoryController extends Controller
{
    public function index()
{
    $categories = Categories::all();
    return view('admin.categories')->with('categories',$categories);
}

    public function store(Request $request)
    {
        $categories= new categories;
        $categories->name= $request->input('name');
        $categories->save();

        return redirect('/categories')->with('status', 'Category has been added');
    }

    public function edit($id)
    {
        $categories = Categories::findOrFail($id);
        return view('admin.categories.edit')->with('categories',$categories);
    }

    public function update(Request $request, $id)
    {
        

        $categories = Categories::find($id);
        $categories->name = $request->get('name');
        $categories->update();

        return redirect('/categories')->with('status', 'Category has been updated');
    }

    public function delete($id)
    {
        $categories = Categories::findOrFail($id);
        $categories->delete();

        return redirect('/categories')->with('success', 'Category has been deleted');
    }
}
