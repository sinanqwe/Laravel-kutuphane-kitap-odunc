<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Book;
use App\Models\Image;
use App\Models\Reservation;
use App\Models\Message;
use App\Models\Review;
use App\Models\Faq;

class HomeController extends Controller
{

    public static function categorylist()
    {
        return Category::where('parent_id','=',0)->with('children')->get();
    }

    public static function getsetting(){
        return Setting::first();
    }

    public static function countreview($id)
    {
        return Review::where('book_id', $id)->count();
    }

    public function index()
    {
        $setting = Setting::first();
        $slider = Book::select('id','title','image','type','status')->where('status', '=', 'True')->limit(10)->get();
        $daily = Book::select('id','title','image','type','status')->where('status', '=', 'True')->limit(8)->inRandomOrder()->get();
        $last = Book::select('id','title','image','type','status')->where('status', '=', 'True')->limit(8)->orderByDesc('id')->get();
        $best = Book::select('id','title','image','type','status')->where('status', '=', 'True')->limit(8)->orderByDesc('type')->get();
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
        $datalist = Faq::all();
        return view('home.faq',['datalist'=>$datalist]);
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact',['setting'=>$setting]);
    }

    
    public function getbook(Request $request)
    {
        $search = $request->input('search');
        $count = Book::where('title','like','%'.$search.'%')->where('status', '=', 'True')->get()->count();
        if ($count == 1)
        {
            $data = Book::where('title','like','%'.$search.'%')->first();
            return redirect()->route('book',['id'=>$data->id]);
        }
        else
        {
            return redirect()->route('booklist',['search'=>$search]);
        }

    }

    public function booklist($search)
    {
        $datalist = Book::where('title','like','%'.$search.'%')->where('status', '=', 'True')->get();

        return view('home.search_books',['search'=>$search, 'datalist'=>$datalist] );
    }
 

    public function book($id)
    {
        $data = Book::find($id);
        $datalist = Image::where('book_id',$id)->get();
        $reviews = Review::where('book_id',$id)->get();

        return view('home.book_detail',['data'=>$data, 'datalist'=>$datalist,'reviews'=>$reviews] );
    }

    public function reservation($id)
    {
        $datalist = Reservation::all();
        return view('home.user_reservations',['datalist'=>$datalist] );
    }

    public function categorybooks($id)
    {
        $datalist = Book::where('category_id',$id)->where('status', '=', 'True')->get();
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
