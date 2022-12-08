<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Menu;
use App\Models\Genre;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category',
        'picture',
        'genre_id'
    ];
    
    public function menu()
    {
        return $this->hasOne(Menu::class);
    }
    public function menus()
    {
        return $this->hasMany(Menu::class);
    }
    
    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
