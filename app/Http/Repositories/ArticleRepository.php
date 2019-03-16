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
		return Article::with('tags', 'medias')->paginate(5);
	}

	public function findArticleBy($feild, $value)
	{
		return Article::with('tags')->where($feild, $value);
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
	public function updateArticle($data)
	{
		$article = Article::find($data['id']);

		unset($data['id']);

		$article->update($data);
		
		return $article;
	}
}