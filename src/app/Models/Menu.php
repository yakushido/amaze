<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Part;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu',
        'priceA',
        'priceB',
        'category_id',
        'gender_id',
        'part_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function part()
    {
        return $this->belongsTo(Part::class);
    }
}
