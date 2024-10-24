<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    protected $table = 'transaction_details';
    protected $primaryKey = 'TransacDet_ID';
    protected $fillable = [
        'Categ_ID',
        'Transac_ID',
        'Qty',
    ];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'Transac_ID');
    }

    public function category()
    {
        return $this->belongsTo(LaundryCategory::class, 'Categ_ID');
    }
}
