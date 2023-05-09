<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class VendorController extends Controller
{
     public function store(Request $request)
    {
        // Retrieve authenticated user
        $user = Auth::user();

        //  Retrieve phone number entered by user
        $phone_number = $request->input('tel');

        // Sanitize phone number
        $phone_number = filter_var($phone_number, FILTER_SANITIZE_NUMBER_INT);

        //  Update phone number of authenticated user in "users" table
        DB::table('users')->where('id', $user->id)->update([
            'phone_number' => $phone_number,
            'user_type' => 'vendor',
        ]);

        //  Redirect user to success page
        return redirect('/home');
    }
}

