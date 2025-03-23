<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clints extends Model
{
      protected $table = 'clients'; 

    protected $fillable = [
        'name',
        'email',
        'phone',
    ];
    use HasFactory;
}
