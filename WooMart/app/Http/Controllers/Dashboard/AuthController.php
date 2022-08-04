<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        if(Auth::user()) {
            return  redirect()->route('admin.dashboard');
        }
        return view('Backend.auth.login');
    }

    public function adminCheck(Request $request)
    {
        if(Auth::attempt(['email' =>$request->email, 'password' =>$request->password])) {
            return  redirect()->route('admin.dashboard');
        }
        return redirect()->back();
    }
}
