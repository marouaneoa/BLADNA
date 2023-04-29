<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function registered(){
        $users = User::all();
        return view('admin.register')->with('users',$users);
    }
    public function registeredit(Request $request,$id ){
        $users=User::findOrfail($id);
        return view('admin.register-edit')->with('users',$users);
    }
    public function registerupdate(Request $request,$id){
        $users=User::find($id);
        $users->user_type=$request->input('user_type');
        $users->update();
        return redirect('role-register')->with('status','Your data is updates');
    }
    public function registerdelete($id){
        $users=User::findOrfail($id);
        $users->delete();
        return redirect('role-register')->with('status','Your data is deleted');
    }
}
