<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
	 * [index description]
	 * @return [type] [description]
	 */
	public function index()
	{
		return $this->articleRepository->getAll();
	}

	public function create(Request $request)
	{
		// mock data
		$request['post'] = "fjvdfvjdfvdfvdf" . rand(100, 1000000);
		$request['title'] = "fjvdfvjdfvdfvdf" . rand(100, 1000000);
		$request['user_id'] = 1;
		$request['description'] = "fjvdfvjdfvdfvdf" . rand(100, 1000000);


		$validator = $this->articleValidator->createArticleValidation($request->all());

		if ($validator->fails()) {
			// return back()->withErrors($validator->errors());
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
		# code...
	}

}
