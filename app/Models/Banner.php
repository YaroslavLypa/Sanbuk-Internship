<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    const TYPE_CRUISE = 0;
    const TYPE_MOST_POPULAR = 1;
    const TYPE_BY_THE_THEME = 2;
    const TYPE_BY_BOAT = 3;

    protected $fillable = [
        'type',
        'image',
        'name',
        'price'
    ];
}
