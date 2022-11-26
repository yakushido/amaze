<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EyelashPart extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function Eyelashs()
    {
        return $this->hasMany('App\Models\Eyelash');
    }
}
