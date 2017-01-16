<?php

namespace papertracker;

use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    public function author()
    {
      return $this->belongsTo(User::class);
    }
}
