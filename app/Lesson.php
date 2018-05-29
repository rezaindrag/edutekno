<?php

namespace App;

use App\Video;
use App\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    use SoftDeletes;
    
    /**
     * Relationship
     */
    public function course()
    {
        return $this->blongsTo(Course::class);
    }
    public function videos()
    {
        return $this->hasMany(Video::class);
    }
}
