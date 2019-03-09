<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ArticleTag extends Model
{
	protected $table = "article_tag";

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
	    'article_id',
	    'tag_id',
	];
}
