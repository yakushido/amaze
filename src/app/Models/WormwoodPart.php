<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WormwoodPart extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function Wormwoods()
    {
        return $this->hasMany('App\Models\Wormwood');
    }
}