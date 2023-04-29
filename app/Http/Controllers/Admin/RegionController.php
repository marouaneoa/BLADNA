<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Region;

class RegionController extends Controller
{
    public function index()
{
    $regions = Region::all();
    return view('admin.regions')->with('regions',$regions);
}

    public function store(Request $request)
    {
        $regions= new region;
        $regions->name= $request->input('name');
        $regions->save();

        return redirect('/regions')->with('status', 'Region has been added');
    }

    public function edit($id)
    {
        $regions = Region::findOrFail($id);
        return view('admin.regions.edit')->with('regions',$regions);
    }

    public function update(Request $request, $id)
    {
        

        $regions = Region::find($id);
        $regions->name = $request->get('name');
        $regions->update();

        return redirect('/regions')->with('status', 'Region has been updated');
    }

    public function delete($id)
    {
        $regions = Region::findOrFail($id);
        $regions->delete();

        return redirect('/regions')->with('success', 'Region has been deleted');
    }
}
