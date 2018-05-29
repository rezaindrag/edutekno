<?php

namespace App;

use App\Lesson;
use App\Category;
use App\Instructor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{
    use SoftDeletes;

    /**
     * Relationship
     */
    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }
    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
