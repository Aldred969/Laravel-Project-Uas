<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product; // ⬅️ WAJIB

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
    ];

    // ⬇️ RELASI INI YANG DICARI LARAVEL
    public function products()
    {
        return $this->hasMany(Product::class, 'game_id');
    }
}
