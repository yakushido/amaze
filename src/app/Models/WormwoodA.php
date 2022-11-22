<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WormwoodA extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'plice',
        'wormwood_genre_id'
    ];
}
