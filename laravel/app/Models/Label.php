<?php

namespace App\Models;

class Label extends \Illuminate\Database\Eloquent\Model
{
    public function tasks()
    {
        return $this->belongsToMany(Task::class);
    }
}
