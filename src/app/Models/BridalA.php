<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BridalA extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'bridal_genre_id',
        'plice'
    ];

    public function bridal_genre()
    {
        return $this->belongsTo('App\Models\BridalGenre');
    }
}
