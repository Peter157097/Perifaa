<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = User::where('email', $request->email)->first();

            if ($user->admin) {
                return response()->json(['isAdmin' => true]);
            } else {
                Auth::logout();
                return response()->json(['isAdmin' => false]);
            }
        }

        return response()->json(['isAdmin' => false]);
    }
    public function showLoginForm()
    {
        return view('auth.login');
    }
}
