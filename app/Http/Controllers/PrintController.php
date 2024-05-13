<?php

namespace App\Http\Controllers;

use App\Models\PurchaseTickets;
use Illuminate\Http\Request;

class PrintController extends Controller
{
    public function print($id)
    {
        $tickets = PurchaseTickets::findOrFail($id);
        $seats = explode(',', $tickets->seat);

        return view('print', [
            'title' => 'Print',
            'tickets' => $tickets,
            'seats' => $seats
        ]);
    }
}
