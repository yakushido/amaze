<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EyelashA extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'eyelash_genre_id',
        'plice'
    ];

    public function eyelash_genre()
    {
        return $this->belongsTo('App\Models\EyelashGenre');
    }
}
