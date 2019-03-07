<?php


namespace App\Http\Validations;

use Validator;

class ArticleValidator
{
	public function createArticleValidation($data)
	{	
		$validator = Validator::make($data, [
			'post' 			=> 'required|unique:articles|string',
			'title' 		=> 'required|unique:articles|string',
			'description' 	=> 'required|unique:articles|string',
		]);

		return $validator;
	}

}