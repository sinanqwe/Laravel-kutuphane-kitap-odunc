<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Books;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = DB::select('select * from books');
        return view('admin.books', ['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Category::all();
        $datalist = Books::all();
        return view('admin.books_add', ['datalist' => $datalist, 'data'=> $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new books;
        $data->id = $request->input('id');
        $data->name = $request->input('name');
        $data->writer = $request->input('writer');
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->image = Storage::putFile('images', $request->file('image'));
        $data->categories_id = $request->input('categories_id');
        $data->quantity = $request->input('quantity');
        $data->detail = $request->input('detail');
        $data->status = $request->input('status');
        $data->user_id = Auth::id();
        $data->save();

        return redirect()->route('admin_books');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function show(Books $books)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function edit(Books $books,$id)
    {
        $data = Category::all();
        $datalist = Books::find($id);
        return view('admin.books_edit', ['data' => $data, 'datalist'=> $datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Books $books,$id)
    {
        $data = Books::find($id);
        $data->name = $request->input('name');
        $data->writer = $request->input('writer');
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->image = Storage::putFile('image', $request->file('image'));
        $data->categories_id = $request->input('categories_id');
        $data->quantity = $request->input('quantity');
        $data->detail = $request->input('detail');
        $data->status = $request->input('status');
        $data->save();

        return redirect()->route('admin_books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Books  $books
     * @return \Illuminate\Http\Response
     */
    public function destroy(Books $books,$id)
    {
        DB::table('books')->where('id','=', $id)->delete();
        return redirect(route('admin_books'));
    }
}
