<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Book;
use App\Models\Image;
use App\Models\Message;

class HomeController extends Controller
{

    public static function categorylist()
    {
        return Category::where('parent_id','=',0)->with('children')->get();
    }

    public static function getsetting(){
        return Setting::first();
    }

    public function index()
    {
        $setting = Setting::first();
        $slider = Book::select('id','title','image','type')->limit(10)->get();
        $daily = Book::select('id','title','image','type')->limit(8)->inRandomOrder()->get();
        $last = Book::select('id','title','image','type')->limit(8)->orderByDesc('id')->get();
        $best = Book::select('id','title','image','type')->limit(8)->orderByDesc('type')->get();
        $data = ['setting'=>$setting,
                'slider'=>$slider,
                'daily'=>$daily,
                'last'=>$last,
                'best'=>$best,
                'page'=>'home'
        ];
        return view('home.index',$data );
    }

    public function aboutus()
    {
        $setting = Setting::first();
        return view('home.about',['setting'=>$setting]);
    }

    public function references()
    {
        $setting = Setting::first();
        return view('home.references',['setting'=>$setting]);
    }

    public function faq()
    {
        return view('home.aboutus');
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact',['setting'=>$setting]);
    }

    public function books($id)
    {
        $data = Book::find($id);
        $datalist = Image::where('book_id',$id)->get();

        return view('home.book_detail',['data'=>$data, 'datalist'=>$datalist] );
    }

    public function addtocart($id)
    {
        echo "make a reservation <br>";
        $data = Book::find($id);
        print_r($data);
        exit();
    }

    public function categorybooks($id)
    {
        $datalist = Book::where('category_id',$id)->get();
        $data = Category::find($id);
        return view('home.category_books',['data'=>$data , 'datalist'=>$datalist] );
    }

    public function sendmessage(Request $request)
    {
        $data = new Message;
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();
        return redirect()->route('contact')->with('success','Mesajınız iletilmiştir. Teşekkürler.');
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
