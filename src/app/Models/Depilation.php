<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Depilation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'depilation_genre_id',
        'depilation_part_id',
        'pliceA',
        'pliceB'
    ];
    
    public function depilation_genre()
    {
        return $this->belongsTo('App\Models\DepilationGenre');
    }

    public function depilation_part()
    {
        return $this->belongsTo('App\Models\DepilationPart');
    }
}
