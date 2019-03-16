<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Validations\ArticleValidator;

use App\Http\Repositories\TagRepository;
use App\Http\Repositories\MediaRepository;
use App\Http\Repositories\ArticleRepository;

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
	 * [$mediaRepository description]
	 * @var [type]
	 */
	public $mediaRepository;

	/**
	 * 
	 */
	public function __construct
	(
		TagRepository $tagRepository,
		MediaRepository $mediaRepository,
		ArticleValidator $articleValidator,
		ArticleRepository $articleRepository
	)
	{
		$this->tagRepository 		= $tagRepository;
		$this->articleValidator 	= $articleValidator;
		$this->articleRepository 	= $articleRepository;
		$this->mediaRepository 		= $mediaRepository;
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
	    	"articles" 	=> $articles,
	    	"tags" 		=> $tags
	    ];

	    return $this->sendResponse($data, 200);
	}

	public function create(Request $request)
	{
		$request['description'] = $request['description'] . rand(1, 1000);
		$request['title'] = $request['title'] . rand(1, 1000);
		$request['post'] = $request['title'] . rand(1, 1000);

		$validator = $this->articleValidator->createArticleValidation($request->all());

		if ($validator->fails()) {
			return $this->sendResponse($validator->errors(), 400);
		}

		$request['image'] = json_decode($request['image']);

		$article = $this->articleRepository->createArticle($request->all());

		$article->tags()->attach(json_decode($request->tags));

		return $this->sendResponse($article, 200);
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
			return $this->sendResponse($validator->errors(), 400);
		}

		$request['image'] = json_decode($request['image']);

		$article = $this->articleRepository->updateArticle($request->all());

		$article->tags()->sync(json_decode($request->tags));

		return $this->sendResponse($article, 200);
	}

	public function delete($id)
	{
		$this->articleRepository->findArticleBy('id', $id)->delete();
		return $this->sendResponse('article deleted', 200);
	}
}
