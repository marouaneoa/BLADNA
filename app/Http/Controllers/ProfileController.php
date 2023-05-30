<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('profile.index', compact('user'));
    }
    public function show(User $user)
    {
    return view('profile.show', compact('user'));
    }
    public function edit()
{
    $user = auth()->user();

    return view('profile.edit', compact('user'));
}

    public function update(Request $request)
{
    $user = Auth::user();

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        'current_password' => 'required|string',
        'password' => 'nullable|string|min:8|confirmed',
        'phone_number' => 'nullable|string',
    ]);

    if (!Hash::check($request->current_password, $user->password)) {
        throw ValidationException::withMessages([
            'current_password' => 'The current password is incorrect.',
        ]);
    }

    $user->name = $request->name;
    $user->email = $request->email;

    if ($request->filled('password')) {
        $user->password = Hash::make($request->password);
    }

    $user->phone_number = $request->phone_number;
    $user->save();

    return redirect()->route('profile.index')->with('success', 'Profile successfully updated.');
}
    


}
