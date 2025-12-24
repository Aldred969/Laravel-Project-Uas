<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Game extends Model
{
    use HasFactory;

    protected $table = 'games';
    protected $primaryKey = 'id';

    // Karena id auto increment
    public $incrementing = true;

    protected $keyType = 'int';

    // Karena tabel games pakai created_at & updated_at
    public $timestamps = true;

    protected $fillable = [
        'name',
        'description',
        'image'
    ];
}
