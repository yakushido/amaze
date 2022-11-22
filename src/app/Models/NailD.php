<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NailD extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'plice',
        'nail_genre_id'
    ];

    public function nail_genre()
    {
        return $this->belongsTo('App\Models\NailGenre');
    }
}
