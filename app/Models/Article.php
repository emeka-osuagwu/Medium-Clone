<?php

namespace App\Models;

use Carbon\Carbon;
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
	    'image',
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
		"image" => 'array'
	];

	public function getCreatedAtAttribute($value)
	{
	    return Carbon::parse($value)->diffForHumans();
	}

	public function tags()
	{
	    return $this->belongsToMany('App\Models\Tag');
	}

	public function medias()
	{
	    return $this->belongsToMany('App\Models\Media');
	}
}
