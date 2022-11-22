<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BridalD extends Model
{
    use HasFactory;

    protected $fillable = [
        'bridal_genre_id',
        'part',
        'name',
        'plice'
    ];

    public function bridal_genre()
    {
        return $this->belongsTo('App\Models\BridalGenre');
    }
}
