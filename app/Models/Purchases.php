<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PurchaseItems;
class Purchases extends Model
{
    use HasFactory;
    protected $fillable = [
        'supplier', 'phone', 'purchase_date', 'description'
    ];

    public function items()
    {
        return $this->hasMany(PurchaseItems::class);
    }
}
