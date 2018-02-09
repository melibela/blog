<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function scopeIncomplete($query)
    {
      #return static::where('completed',0)->get();
      #change this function (not static anymore) to a scope function so you can add conditions to this query
      return $query->where('completed',0);
    }
}
