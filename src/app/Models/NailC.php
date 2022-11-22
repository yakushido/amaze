<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NailC extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'plice_A',
        'plice_B',
        'nail_genre_id'
    ];

    public function nail_genre()
    {
        return $this->belongsTo('App\Models\NailGenre');
    }
}
