<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
	    'post',
	    'title', 
	    'author',
	    'image',
	    'tags',
	    'description',
	];

	/**
	 * The attributes that should be hidden for arrays.
	 *
	 * @var array
	 */
	protected $hidden = [
	];

	/**
	 * The attributes that should be cast to native types.
	 *
	 * @var array
	 */
	protected $casts = [
		'tags' => 'json'
	];

	public function tags()
	{
	    return $this->belongsToMany('App\Models\Tag');
	}
}
