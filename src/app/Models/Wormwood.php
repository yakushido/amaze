<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wormwood extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'wormwood_genre_id',
        'wormwood_part_id',
        'pliceA',
        'pliceB'
    ];
    
    public function wormwood_genre()
    {
        return $this->belongsTo('App\Models\WormwoodGenre');
    }

    public function wormwood_part()
    {
        return $this->belongsTo('App\Models\WormwoodPart');
    }
}
