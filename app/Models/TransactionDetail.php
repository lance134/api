<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    protected $table = 'transaction_details';

    protected $fillable = [
        'Categ_ID',
        'Tracking_number',
        'Qty',
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'Tracking_number');
    }

    public function category()
    {
        return $this->belongsTo(LaundryCategory::class, 'Categ_ID');
    }
}
