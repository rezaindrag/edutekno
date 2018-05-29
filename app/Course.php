<?php

namespace App;

use App\Lesson;
use App\Category;
use App\Instructor;
use App\Transaction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes;
    
    /**
     * Relationship
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function instructor()
    {
        return $this->belongsTo(Instructor::class);
    }
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
