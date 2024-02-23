<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardModel extends Model
{
    use HasFactory;

    protected $table = 'cards';

    protected $fillable = [
        'cardType',
        'attribute',
        'name',
        'level',
        'rank',
        'image',
        'type',
        'subType',
        'description',
        'stats',
        'code'
    ];
}