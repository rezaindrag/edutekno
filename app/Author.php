<?php

namespace App;

use App\Post;
use App\User;

class Author extends User
{
    protected $table = 'users';

    /**
     * Relationship
     */
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
