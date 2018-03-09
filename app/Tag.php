<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];
    public function blogposts(){
    	return $this->belongsToMany('App\Blogpost');
    }
}
