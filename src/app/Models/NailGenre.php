<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NailGenre extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function NailAs()
    {
        return $this->hasMany('App\Models\NailA');
    }

    public function NailBs()
    {
        return $this->hasMany('App\Models\NailB');
    }

    public function NailCs()
    {
        return $this->hasMany('App\Models\NailC');
    }

    public function NailDs()
    {
        return $this->hasMany('App\Models\NailD');
    }
}
