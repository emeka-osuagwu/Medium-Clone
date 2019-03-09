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

	public function updateArticleValidation($data)
	{	
		$validator = Validator::make($data, [
			'id' 			=> 'required|exists:articles|integer',
			'post' 			=> 'required_if:section,post|string',
			'title' 		=> 'required_if:section,title|string',
			'user_id' 		=> 'required|exists:users|integer',
			'description' 	=> 'required_if:section,description|string',
		]);

		return $validator;
	}
}