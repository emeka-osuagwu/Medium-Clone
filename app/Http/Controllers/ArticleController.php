<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Validations\ArticleValidator;

use App\Http\Repositories\TagRepository;
use App\Http\Repositories\ArticleRepository;

use App\Http\Resources\ArticleResource;

class ArticleController extends Controller
{
	/**
	 * [$tagRepository description]
	 * @var [type]
	 */
	public $tagRepository;
	
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
		TagRepository $tagRepository,
		ArticleValidator $articleValidator,
		ArticleRepository $articleRepository
	)
	{
		$this->tagRepository 		= $tagRepository;
		$this->articleValidator 	= $articleValidator;
		$this->articleRepository 	= $articleRepository;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$tags 		= $this->tagRepository->getAll();
		$articles 	= $this->articleRepository->getAll();
	    
	    $data = [
	    	"tags" 		=> $tags,
	    	"articles" 	=> $articles
	    ];

	    return $this->payload($data, 200);
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
