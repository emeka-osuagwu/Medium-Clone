<?php

namespace App\Http\Repositories;

use App\Models\Media;

class MediaRepository
{
	public function create($data)
	{
		return $data;
		return Media::insert($data);
	}
}