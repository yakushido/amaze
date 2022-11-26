<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NailPart extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function Nails()
    {
        return $this->hasMany('App\Models\Nail');
    }
}
