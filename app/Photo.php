<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $fillable = array('album_id', 'description', 'Photo', 'title', 'size');

    public function album() {
    	return $this->belongsTo('App\Album');
    }
}