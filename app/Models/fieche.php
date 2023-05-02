<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fieche extends Model
{
    protected $table = "fieche";
    protected $fillable = [
        'ProductDetail_id',
        'User_id',
        'LineTotal',
        'isReady',
        'isShipping',
        'isOk',
    ];
}
