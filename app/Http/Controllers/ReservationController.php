<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Reservation::where('user_id',Auth::id())->get();
        return view('home.user_reservation', ['datalist' => $datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,Reservation $reservation,$book_id)
    {
        $data = Book::find($book_id);
        return view('home.user_reservation_add',['data'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$book_id)
    {
        $data = new Reservation;
        $data->user_id = Auth::id();
        $data->book_id= $book_id;
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->bookdate = $request->input('bookdate');
        $data->returndate= $request->input('returndate');
        $data->days= $request->input('days');
        $data->IP= $_SERVER['REMOTE_ADDR'];
        //$data->note= $request->input('note');
        $data->status= $request->input('status');
        $data->save();
        return redirect()->route('user_reservations');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function edit(Reservation $reservation,$id)
    {
        $data = Reservation::find($id);
        return view('home.user_reservation_edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation,$id)
    {
        $data = Reservation::find($id);
        $data->user_id = Auth::id();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->bookdate = $request->input('bookdate');
        $data->returndate= $request->input('returndate');
        $data->days= $request->input('days');
        $data->IP= $_SERVER['REMOTE_ADDR'];
        $data->note= $request->input('note');
        $data->status= $request->input('status');
        $data->save();
        return redirect()->route('user_reservations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reservation $reservation,$id)
    {
        $data = Reservation::find($id);
        $data->delete();
        return redirect()->back();
    }
}
