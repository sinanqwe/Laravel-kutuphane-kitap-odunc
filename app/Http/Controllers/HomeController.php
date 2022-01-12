<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function aboutus()
    {
        return view('home.aboutus');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function logincheck(Request $request)
    {
        if($request->isMethod('post')){

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('admin');
            }

            return back()->withErrors([
                'email' => 'Yanlış',
            ]);
        }
        else{
            return view('admin.login');
        }      
    }

    public function logout(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect('/');
    }


}
