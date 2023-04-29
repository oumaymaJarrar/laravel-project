<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atelier extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'des_atelier',
        'adr_atelier',
    ];
}