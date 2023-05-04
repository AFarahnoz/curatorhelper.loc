<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuratorHour extends Model
{
    use HasFactory;

    public function group(){
    	return $this->HasOne(Group::class);
    }

    public function auditorium(){
    	return $this->HasOne(Auditorium::class);
    }
}
