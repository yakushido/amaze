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
    
    public function BridalAs()
    {
        return $this->hasMany('App\Models\BridalA');
    }
    
    public function BridalBs()
    {
        return $this->hasMany('App\Models\BridalB');
    }
    
    public function BridalCs()
    {
        return $this->hasMany('App\Models\BridalC');
    }
    
    public function BridalDs()
    {
        return $this->hasMany('App\Models\BridalD');
    }
}
