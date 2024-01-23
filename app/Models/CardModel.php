<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardModel extends Model
{
    use HasFactory;

    protected $table = 'cards';

    protected $fillable = [
        'attribute',
        'name',
        'level/rank',
        'image',
        'type',
        'description',
        'stats',
        'code'
    ];
}
