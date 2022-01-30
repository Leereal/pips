<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mt4Details extends Model
{
    use HasFactory;

    public function tuser(){
    	return $this->belongsTo('App\Models\User', 'client_id');
    }
}
