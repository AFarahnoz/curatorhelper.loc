<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuratorHour extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'time',
        'theme',
        'auditorium'
    ];

    public function group(){
    	return $this->HasOne(Group::class);
    }

}
