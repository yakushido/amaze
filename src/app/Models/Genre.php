<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = [
        'e-name',
        'j-name'
    ];

    public function category()
    {
        return $this->hasOne(Category::class);
    }
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
