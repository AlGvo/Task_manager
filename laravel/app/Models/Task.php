<?php

namespace App\Models;

class Task extends \Illuminate\Database\Eloquent\Model
{
    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function labels()
    {
        return $this->belongsToMany(Label::class);
    }
}
