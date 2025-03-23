<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Items;
use App\Models\clints;
class Sale extends Model
{
    use HasFactory;
    //     protected $fillable = [
    //     'client_id',
    //     'item_id',
    //     'quantity',
    //     'price',
    //     'total',
    //     'type',
    //     'payment_method',
    //     'description',
    // ];


        protected $fillable = [
        'client_id',
        'payment_method',
        'description',
    ];

    public function items()
    {
        return $this->hasMany(SaleItem::class);
    }

    public function client()
    {
        return $this->belongsTo(clints::class);
    }



}
