<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleMedia extends Model
{
	protected $table = "article_media";

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
	    'article_id',
	    'media_id',
	];
}
