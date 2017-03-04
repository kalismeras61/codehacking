<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

	protected $fillable = [

		'user_id',
		'category_id',
		'photo_id',
		'title',
		'body'


		];

	public function User(){


		return $this->belongsTo('App\User');

	}

	public function Photo(){

		return $this->belongsTo('App\Photo');
	}

	public function Category(){

		return $this->belongsTo('App\Category');

	}
}
