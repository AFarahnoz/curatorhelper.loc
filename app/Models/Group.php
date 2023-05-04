<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    public function curator(){
    	return $this->HasOne(Curator::class);
    }

    public function curatorHour(){
    	return $this->HasMany(CuratorHour::class);
    }

    public function socialActivity(){
    	return $this->HasMany(SocialActivity::class);
    }

    public function students(){
    	return $this->HasMany(Student::class);
    }
}
