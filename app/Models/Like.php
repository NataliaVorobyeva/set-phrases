<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Like extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'frase_id',
        
    ];
    protected $dates =  ['deleted_at'];
    
    public function like(){
        return $this->belongsTo(Like::Class);
    }

}
