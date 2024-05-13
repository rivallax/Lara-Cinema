<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Movie;
use App\Models\Purchases;
use App\Models\PurchaseTickets;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class MovieController extends Controller
{
    public function index()
    {
        return view('home', [
            "title" => "Home",
            "movies" => Movie::all()
        ]);
    }

    public function seat($time, $id)
    {
        $currentTime = Carbon::now();
        return view('seat', [
            "title" => "Seat",
            "time" => "$time" . ':00',
            "date" => $currentTime->format('d M'),
            "seat" => [],
            "movie" => Movie::find($id),
            "history" => PurchaseTickets::all()
        ]);
    }

    public function store(Request $request)
    {
        $currentTime = Carbon::now();
        Purchases::create([
            'movie_id' => Movie::where('name', $request->movie)->first()->id,
            'date' => $currentTime,
            'time' => $request->time,
            'total' => $request->entire_pay,
            'cash' => $request->amount_paid
        ]);

        PurchaseTickets::create([
            'purchase_id' => Purchases::latest()->first()->id,
            'seat' => $request->seat,
        ]);

        session()->flash('success', 'Transaction Successful!');

        return view('order', [
            'title' => 'Order',
            'purchases' => $request,
            'purchase_id' => PurchaseTickets::latest()->first()->id
        ]);
    }
}
