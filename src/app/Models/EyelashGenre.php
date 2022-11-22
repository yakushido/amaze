<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EyelashGenre extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function EyelashAs()
    {
        return $this->hasMany('App\Models\EyelashA');
    }

    public function EyelashBs()
    {
        return $this->hasMany('App\Models\EyelashB');
    }

    public function EyelashCs()
    {
        return $this->hasMany('App\Models\EyelashC');
    }

    public function EyelashDs()
    {
        return $this->hasMany('App\Models\EyelashD');
    }
}
