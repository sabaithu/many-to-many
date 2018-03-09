<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogpost extends Model
{
    protected $guarded = [];

    public function tags()
    {
    	return $this->belongsToMany('App\Tag');
    }
}
