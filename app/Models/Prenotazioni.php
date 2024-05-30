<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prenotazioni extends Model
{   protected $fillable = [
    'corso', 'data', 'orario', 'user_id' , 'attivita_id'
];

    use HasFactory;

    function attivita(){
        return $this->belongsTo(Attivita::class);
    }

    function user(){
        return $this->belongsTo(User::class);
    }
}
