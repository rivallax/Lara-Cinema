<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Purchases;

class PurchaseTickets extends Model
{
    use HasFactory;

    public function purchase()
    {
        return $this->belongsTo(Purchases::class);
    }

    protected $guarded = ['id'];
}
