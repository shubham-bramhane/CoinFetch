<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'coin_id', // 'id' is reserved by Laravel, so we use 'coin_id' instead
        'symbol',
        'name',
        'platforms',
    ];
}
