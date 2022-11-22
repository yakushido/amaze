<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepilationGenre extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];
    
    public function DepilationAs()
    {
        return $this->hasMany('App\Models\DepilationA');
    }
    
    public function DepilationBs()
    {
        return $this->hasMany('App\Models\DepilationB');
    }
    
    public function DepilationCs()
    {
        return $this->hasMany('App\Models\DepilationC');
    }
}
