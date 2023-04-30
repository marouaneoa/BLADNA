<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function user_chart(){
        $totalCounts = [
            'users' => DB::table('users')->count(),
            'vendors' => DB::table('users')->where('user_type','vendor')->count(),
            'items' => DB::table('items')->count(),
            'posts' => DB::table('posts')->count(),
           
        ];
       
    
        //user chart
        $users = DB::table('users')
                    ->selectRaw('MONTH(created_at) as month, COUNT(*) as count')
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(DB::raw('MONTH(created_at)'))
                    ->orderBy(DB::raw('MONTH(created_at)'))
                    ->get();
        $labels=[];
        $data=[];
        //$colors=[];
        for($i=1; $i<12; $i++){
            $month=date('F',mktime(0,0,0,$i,1));
            $count=0;
    
            foreach($users as $user){
                if($user->month == $i){
                    $count= $user->count;
                    break;
                }
            }
            array_push($labels,$month);
            array_push($data, $count);
        }
        $datasets=[
            [
               'label' => '# of registered Users',
               'data' => $data,
               //'backgroundColor' => $colors 
            ]
            ];
    
            
    
        return view('admin.dashboard')->with('datasets', $datasets)->with('labels', $labels)->with('totalCounts', $totalCounts);
       }


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
