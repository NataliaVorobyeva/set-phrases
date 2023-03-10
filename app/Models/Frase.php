<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frase extends Model
{
    use HasFactory;
    protected $fillable = [
        'text',
        'image',
        'frase_id',
        'sliderOn',
    ];
}
