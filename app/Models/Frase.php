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
        'author',
        'sliderOn',
    ];

    public function favorite(){

        $userLog = auth()->guard('user')->user()!=null ? auth()->guard('user')->user()->id : null;
        return $this->belongsTo(Like::Class, 'id', 'frase_id')->where('user_id', $userLog);
    }

    public function like(){
        return $this->favorite()->selectRaw('frase_id,count(*) as count')->groupBy('frase_id');
    }
}
