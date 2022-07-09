<?php

namespace App\Models;

class Status extends \Illuminate\Database\Eloquent\Model
{
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
