<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adress extends Model
{
    use HasFactory;

    protected $table = "adress";
    protected $fillable = [
        'User_id',
        'AdressText',
        'Region',
        'Province',
        'District',
        'ZipCode',
        'isDefault'
    ];
}
