<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\ArticleRepository;

class ArticleController extends Controller
{
	public $articleRepository;

	public function __construct
	(
		ArticleRepository $articleRepository
	)
	{
		$this->articleRepository = $articleRepository;
	}

	public function index()
	{
		return 
	}
}
