<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EyelashImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'eyelash_course_id',
        'picture'
    ];

    public function eyelash_course()
    {
        return $this->belongsTo('App\Models\EyelashCourse');
    }
}
