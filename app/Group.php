<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{

    protected $fillable = ['name'];


    public function users()
    {
      return $this->belongsToMany('App\user')->withTimestamps();
    }

}
