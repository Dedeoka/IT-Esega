<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use AuthenticatesUsers;

class LoginAdminController extends Controller
{
    public function loginadmin(){
        return view('admin.login');
    }

    public function action(Request $request){
        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect()->route('dashboard');
            //return dd(Auth::guard('admin'));
            //return dd(request()->all());
        }else{
            return redirect()->back()->with('error','Email atau Password anda salah');
        }

    }

    public function logoutAdmin()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('loginadmin');
    }
}
