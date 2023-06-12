<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialActiviy extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'time',
        'name',
        'place'
    ];
     public function group(){
    	return $this->HasOne(Group::class);
    }
}
