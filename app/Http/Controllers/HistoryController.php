<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PurchaseTickets;

class HistoryController extends Controller
{
    public function index()
    {
        $history = PurchaseTickets::orderBy('created_at', 'desc')->get();

        return view('history', [
            "title" => "History",
            "history" => $history
        ]);
    }

    public function destroy($id)
    {
        $purchase = PurchaseTickets::findOrFail($id);
        $purchase->delete();

        return redirect('/history')->with('success', 'Purchase ticket deleted successfully.');
    }
}
