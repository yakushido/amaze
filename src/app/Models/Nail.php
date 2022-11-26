<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nail extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nail_genre_id',
        'nail_part_id',
        'pliceA',
        'pliceB'
    ];
    
    public function nail_genre()
    {
        return $this->belongsTo('App\Models\NailGenre');
    }

    public function nail_part()
    {
        return $this->belongsTo('App\Models\NailPart');
    }
}
