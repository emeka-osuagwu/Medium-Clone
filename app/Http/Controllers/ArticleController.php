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

	    return $this->sendResponse($data, 200);
	}

	public function create(Request $request)
	{
		$validator = $this->articleValidator->createArticleValidation($request->all());

		if ($validator->fails()) {
			return $this->payload($validator->errors(), 400);
		}

		$article = $this->articleRepository->createArticle($request->all());

		return $this->payload($article, 200);
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

		if (isset($new_data['title']) && $new_data['title'] != '') 
		{
			$old_data['title'] = $new_data['title'];
		}

		if (isset($new_data['description']) && $new_data['description'] != '') 
		{
			$old_data['description'] = $new_data['description'];
		}

		$this->articleRepository->updateArticle($request->all());

		return $this->payload("Article updated", 200);
	}

	public function delete($id)
	{
		$this->articleRepository->findArticleBy('id', $id)->delete();
		return $this->payload(['article deleted'], 200);
	}
}
