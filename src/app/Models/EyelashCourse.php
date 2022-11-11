<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EyelashCourse extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'plice'
    ];

    public function Eyelashes()
    {
        return $this->hasMany('App\Models\Eyelash');
    }

    public function EyelasComments()
    {
        return $this->hasMany('App\Models\EyelashComment');
    }

    public function EyelasLimits()
    {
        return $this->hasMany('App\Models\EyelashLimit');
    }

    public function EyelashImages()
    {
        return $this->hasMany('App\Models\EyelashImage');
    }
}
