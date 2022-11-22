<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepilationC extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'depilation_genre_id',
        'plice'
    ];

    public function depilation_genre()
    {
        return $this->belongsTo('App\Models\DepilationGenre');
    }
}
