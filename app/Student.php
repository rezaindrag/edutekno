<?php

namespace App;

use App\User;
use App\Transaction;

class Student extends User
{
    protected $table = 'users';

    /**
     * Relationship
     */
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
