<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;

class LoginController extends Controller
{
    public function index(){
       return view('login',[
        'title' => 'Đăng nhập hế thống',
       ]);
    }
    public function store(Request $request){
        $this -> validate($request,[
            'email'=>'required|email:filter',
            'password'=>'required'
        ]);
        if (Auth::attempt(['email' =>$request ->input('email'), 'password' => $request ->input('password')
    ], $request->input('remember')))
        {
            return redirect() -> route('main');
        }
        Session::flash('error','Email hoặc password không đúng');
        return redirect()->back();
    }
}
