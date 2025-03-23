<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Items;
class SaleItem extends Model
{
    use HasFactory;
        protected $fillable = [
        'sale_id',
        'item_id',
        'quantity',
        'price',
        'total',
    ];

    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }

    public function item()
    {
        return $this->belongsTo(Items::class);
    }
}
