<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'game_id',
        'name',
        'price'
    ];

    // relasi ke game
    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    // relasi ke transaksi
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
