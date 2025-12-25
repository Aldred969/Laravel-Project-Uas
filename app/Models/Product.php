<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Game;
use App\Models\Transaction;

class Product extends Model
{
    protected $fillable = [
        'game_id',
        'name',
        'price'
    ];

    public function game()
    {
        return $this->belongsTo(Game::class, 'game_id');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
