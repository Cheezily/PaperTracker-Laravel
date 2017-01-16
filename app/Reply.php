<?php

namespace papertracker;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{

    $dates = ['created_at'];

    public function thread()
    {
      $this->belongsTo(Thread::class)
    }
}
