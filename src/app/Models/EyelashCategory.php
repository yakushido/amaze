<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EyelashCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function Eyelashes()
    {
        return $this->hasMany('App\Models\Eyelash');
    }

    public function EyelashComments()
    {
        return $this->hasMany('App\Models\EyelashComment');
    }
}
