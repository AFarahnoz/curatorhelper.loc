<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Progress extends Model
{
    use HasFactory;

     public function student(){
    	return $this->HasOne(Student::class);
    }

     public function subject(){
    	return $this->HasOne(Subject::class);
    }
}
