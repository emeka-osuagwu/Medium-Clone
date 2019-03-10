<?php

namespace App\Http\Repositories;

use App\Models\Tag;

class TagRepository
{
	/**
	 * [getAll description]
	 * @return [type] [description]
	 */
	public function getAll()
	{
		return Tag::all();
	}
}