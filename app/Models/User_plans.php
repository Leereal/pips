<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_plans extends Model
{
    use HasFactory;

    protected $dates = ['created_at', 'updated_at', 'activated_at', 'last_growth'];
 
    public function dplan(){
        return $this->belongsTo(Plans::class, 'plan', 'id');
    }

    public function duser(){
    	return $this->belongsTo(User::class, 'user', 'id');
    }

}
