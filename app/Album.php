<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    //

    protected $fillable = array('name','user_id','description', 'cover_image');
    
    public function photos() {
    	return $this->hasMany('App\Photo'); 
    }

    public function users() {
    	return $this->belongsTo('App\User'); 
    }
}
