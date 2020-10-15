<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  protected $fillable = [
    'content',
    'user_id',
    'commendable_id',
    'commendable_type'
  ];
  function commendable() {
    return $this->morphTo();
  }
}