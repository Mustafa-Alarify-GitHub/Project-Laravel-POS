<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Purchases;
use App\Models\cateogry;
use App\Models\units;
class PurchaseItems extends Model
{
    use HasFactory;
    protected $fillable = [
        'purchases_id', 'name', 'quantity', 'price', 'total', 'unit_id', 'category_id'
    ];

    public function purchase()
    {
        return $this->belongsTo(Purchases::class, 'purchases_id');
    }

    public function unit()
    {
        return $this->belongsTo(units::class);
    }

    public function category()
    {
        return $this->belongsTo(cateogry::class);
    }
}
