<?php

namespace App\Http\Repositories;

use App\Models\Article;

class ArticleRepository
{
	/**
	 * [getAll description]
	 * @return [type] [description]
	 */
	public function getAll()
	{
		return Article::all();
	}

	/**
	 * [createArticle description]
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function createArticle($data)
	{
		return Article::create($data);
	}

	/**
	 * [updateArticle description]
	 * @param  [type] $data [description]
	 * @return [type]       [description]
	 */
	public function updateArticle(Array $data)
	{
		return $data;
	}
}