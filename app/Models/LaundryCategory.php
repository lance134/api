<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaundryCategory extends Model
{
    use HasFactory;
    protected $table = "laundry_categories";
    protected $primaryKey = "Categ_ID";
    public $incrementing = true;
    protected $keyType = "int";
    protected $fillable = [
        "Categ_ID",
        "Category",
        "Price",
    ];

    public function transactionDetails()
    {
        return $this->hasMany(TransactionDetail::class, 'Categ_ID','Categ_ID');
    }

    // protected $table = 'laundry_category';

    // protected $fillable = [
    //     'category',
    // ];

    // public function transactionDetails()
    // {
    //     return $this->hasMany(TransactionDetail::class, 'categ_id');
    // }
}
