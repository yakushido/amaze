<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Esthetic extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'esthetic_genre_id',
        'esthetic_part_id',
        'pliceA',
        'pliceB'
    ];
    
    public function esthetic_genre()
    {
        return $this->belongsTo('App\Models\EstheticGenre');
    }

    public function esthetic_part()
    {
        return $this->belongsTo('App\Models\EstheticPart');
    }

}
