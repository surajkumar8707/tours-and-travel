<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function login(){
        return view('admin.layouts.blank');
    }

    public function loginPost(Request $request){
        $credentials = $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required',
        ]);
        try{
            if (Auth::attempt($credentials)) {
                // Authentication passed...
                return redirect()->intended('admin/dashboard'); // Redirect to the intended page after successful login
            }

            // Authentication failed...
            return redirect()->back()->withInput($request->only('email'));
        }
        catch(\Exception $e){
            dd($e->getMessage());
        }
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();

        return redirect()->route('admin.login');
    }
}
