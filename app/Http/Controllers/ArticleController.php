<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\ArticleRepository;

class ArticleController extends Controller
{
	/**
	 * [$articleRepository description]
	 * @var [type]
	 */
	public $articleRepository;

	/**
	 * 
	 */
	public function __construct
	(
		ArticleRepository $articleRepository
	)
	{
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
		$request['post'] = "fjvdfvjdfvdfvdf";

		return $request->all();
	}

}
