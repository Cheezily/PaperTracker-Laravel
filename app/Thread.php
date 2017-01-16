<?php

namespace papertracker;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    public function Replies()
    {
      return $this->hasMany(Reply::class);
    }
}
