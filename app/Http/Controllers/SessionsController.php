<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    //
    public function login()
    {
        return view('sessions.login');
    }

    public function store(Request $request)
    {
        $validator = $this->validate($request,[
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);

        if(Auth::attempt($validator,$request->has('remember'))){
            session()->flash('success','迎归');
            return redirect()->route('users.show',[Auth::user()]);
        }else{
            session()->flash('danger','邮箱或者密码不正确！');
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();
        session()->flash('success', '您已成功退出！');
        return redirect('login');
    }
}