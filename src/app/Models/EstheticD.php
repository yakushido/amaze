<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstheticD extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'esthetic_genre_id',
        'plice'
    ];

    public function esthetic_genre()
    {
        return $this->belongsTo('App\Models\EstheticGenre');
    }
}
