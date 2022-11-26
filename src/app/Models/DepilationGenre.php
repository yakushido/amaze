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
    
    public function Depilations()
    {
        return $this->hasMany('App\Models\Depilation');
    }
}
