<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\ArticleResource;
use App\Http\Validations\ArticleValidator;
use App\Http\Repositories\ArticleRepository;

class ArticleController extends Controller
{
	/**
	 * [$articleRepository description]
	 * @var [type]
	 */
	public $articleRepository;

	/**
	 * [$articleValidator description]
	 * @var [type]
	 */
	public $articleValidator;

	/**
	 * 
	 */
	public function __construct
	(
		ArticleValidator $articleValidator,
		ArticleRepository $articleRepository
	)
	{
		$this->articleValidator = $articleValidator;
		$this->articleRepository = $articleRepository;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$articles = $this->articleRepository->getAll();


	    return ArticleResource::collection($articles);
	}

	public function create(Request $request)
	{
		$validator = $this->articleValidator->createArticleValidation($request->all());

		if ($validator->fails()) {
			return $validator->errors();
		}

		return $this->articleRepository->createArticle($request->all());
	}

	/**
	 * [update description]
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
	public function update(Request $request)
	{
		$request['id'] = $request->id;

		$validator = $this->articleValidator->updateArticleValidation($request->all());

		if ($validator->fails()) {
			return $validator->errors();
		}

		return $this->articleRepository->updateArticle($request->all());
	}

}
