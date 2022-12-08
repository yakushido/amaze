<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartDetail extends Model
{
    use HasFactory;

    protected $fillable=[
        'detail',
        'part_id'
    ];
}
