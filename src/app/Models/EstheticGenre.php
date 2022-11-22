<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstheticGenre extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];
    
    public function EstheticAs()
    {
        return $this->hasMany('App\Models\EstheticA');
    }
    
    public function EstheticBs()
    {
        return $this->hasMany('App\Models\EstheticB');
    }
    
    public function EstheticCs()
    {
        return $this->hasMany('App\Models\EstheticC');
    }
    
    public function EstheticDs()
    {
        return $this->hasMany('App\Models\EstheticD');
    }
}
