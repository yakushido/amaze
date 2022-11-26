<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BridalGenre extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];
    
    public function Bridals()
    {
        return $this->hasMany('App\Models\Bridal');
    }
}
