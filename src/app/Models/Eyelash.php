<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eyelash extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'eyelash_genre_id',
        'eyelash_part_id',
        'pliceA',
        'pliceB'
    ];
    
    public function eyelash_genre()
    {
        return $this->belongsTo('App\Models\EyelashGenre');
    }

    public function eyelash_part()
    {
        return $this->belongsTo('App\Models\EyelashPart');
    }
}
