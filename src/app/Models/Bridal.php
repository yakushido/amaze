<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bridal extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'bridal_genre_id',
        'bridal_part_id',
        'pliceA',
        'pliceB'
    ];
    
    public function bridal_genre()
    {
        return $this->belongsTo('App\Models\BridalGenre');
    }

    public function bridal_part()
    {
        return $this->belongsTo('App\Models\BridalPart');
    }
}
