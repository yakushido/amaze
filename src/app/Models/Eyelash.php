<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eyelash extends Model
{
    use HasFactory;

    protected $fillable = [
        'eyelash_course_id',
        'eyelash_category_id'
    ];

    public function eyelash_course()
    {
        return $this->belongsTo('App\Models\EyelashCourse');
    }

    public function eyelash_category()
    {
        return $this->belongsTo('App\Models\EyelashCategory');
    }
}
