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
			'image' 		=> 'required|json',
			'tags' 			=> 'required|json',
		]);

		return $validator;
	}

	public function updateArticleValidation($data)
	{	
		$validator = Validator::make($data, [
			'id' 			=> 'required|exists:articles|integer',
			'post' 			=> 'required_if:section,post|string',
			'title' 		=> 'required_if:section,title|string',
			'description' 	=> 'required_if:section,description|string',
			'image' 		=> 'required_if:section,image|json',
			'tags' 			=> 'required_if:section,tags|json',
		]);

		return $validator;
	}
}