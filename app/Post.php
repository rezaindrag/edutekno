<?php

namespace App;

use App\Author;
use App\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
    /**
     * Relationship
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
