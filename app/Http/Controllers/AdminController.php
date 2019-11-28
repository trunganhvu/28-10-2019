<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function showLogin(){
        if(Auth::check()){
            if(Auth::user()->admin == 1)
                return redirect('/indexadmin');
        }
        return view('layouts.admin.login');
    }
    public function login(Request $request){
        if ($request->isMethod('post')) {
            $data = $request->input();
                if (Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'admin' => '1'])) {
                    // Protect route use Session
    //                Session::put('adminSession', $data['email']);
                    return redirect('/indexadmin');
                } else {
                    return redirect('/admin');//->with('flash_message_error', 'Invalid Username or Password');
                }
           
        }
        //return view('admin.login');
    }
    public function logout(){
        Session::flush();
        return redirect('/admin');//->with('flash_message_success', 'Logged out Successfully');
    }
}
