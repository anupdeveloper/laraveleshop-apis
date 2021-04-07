<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function adminlogin(){
        if(!Auth::check())
        return view('backend.login');
        else
        return redirect()->back();
    }

    public function checklogin(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
           $user = Auth::user();
           //dd($user);
           return redirect()->route('admin.dashboard');
        }else{
            return redirect()->back();
        }
    }

    public function adminlogout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
