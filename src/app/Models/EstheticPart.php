<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstheticPart extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];
    
    public function EstheticBs()
    {
        return $this->hasMany('App\Models\EstheticB');
    }
    
    public function EstheticCs()
    {
        return $this->hasMany('App\Models\EstheticC');
    }
}
