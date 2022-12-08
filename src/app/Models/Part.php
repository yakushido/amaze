<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    use HasFactory;

    protected $fillable = [
        'part',
    ];
    
    public function menu()
    {
        return $this->hasOne(Menu::class)->withDefault();
    }
    public function menus()
    {
        return $this->hasMany(Menu::class);
    }

    public function details()
    {
        return $this->hasMany(PartDetail::class);
    }
}
