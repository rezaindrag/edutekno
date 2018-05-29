<?php

namespace App;

use App\Post;
use App\Video;
use App\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    
    /**
     * Relationship
     */
    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
    public function videos()
    {
        return $this->belongsToMany(Video::class);
    }
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
