<?php

namespace App;

use App\User;
use App\Video;
use App\Course;

class Instructor extends User
{
    protected $table = 'users';
    
    /**
     * Relationship
     */
    public function courses()
    {
        return $this->hasMany(Course::class);
    }
    public function videos()
    {
        return $this->hasMany(Video::class);
    }
}
