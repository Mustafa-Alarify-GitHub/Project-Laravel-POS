<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\cateogry;
use App\Models\units;
class Items extends Model
{
    protected $guarded =[];
    use HasFactory;

        public function category()
    {
        return $this->belongsTo(cateogry::class, 'cat');
    }

    public function unit()
    {
        return $this->belongsTo(units::class, 'unit');
    }
}
