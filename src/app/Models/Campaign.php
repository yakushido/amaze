<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'detail',
        'gender_id',
        'start',
        'end'
    ];

    public function gender()
    {
        return $this->belongsTo('App\Models\Gender');
    }
}
