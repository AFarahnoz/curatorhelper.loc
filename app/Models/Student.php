<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function academicDebts()
    {
    	return $this->hasMany(AcademicDebt::class);
    }

    public function attendance() 
    {
    	return $this->hasMany(Attendance::class);
    }

    public function group() 
    {
    	return $this->hasOne(Group::class);
    }

    public function progress()
    {
    	return $this->hasMany(Progress::class);
    }

    public function parents()
    {
    	return $this->hasMany(Parent::class);
    }

    public function achievements()
    {
    	return $this->hasMany(Achievement::class);
    }
}
