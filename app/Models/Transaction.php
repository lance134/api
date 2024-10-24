<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    // protected $table = 'transactions';
    // protected $primaryKey = 'transac_id';
    // public $incrementing = true; 

    // protected $fillable = [
    //     'cust_id',
    //     'admin_id',
    //     'transac_status',
    //     'tracking_number',
    //     'pickup_datetime',
    //     'delivery_datetime',
    // ];

    // public function details()
    // {
    //     return $this->hasMany(TransactionDetail::class, 'transac_id');
    // }


    protected $table = 'transactions';
    protected $primaryKey = 'Transac_ID';
    public $incrementing = true; 

    protected $fillable = [
        'Tracking_number',
        'Cust_ID',
        'Admin_ID',
        'Transac_date',
        'Transac_status',
        'Received_datetime',
        'Released_datetime',
        'updated_at', // Usually managed by Eloquent
        'created_at'  // Usually managed by Eloquent
    ];

    public function details()
    {
        return $this->hasMany(TransactionDetail::class, 'Transac_ID'); // Ensure correct foreign key
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'Cust_ID');
    }
}