<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function sendResponse($data=null, $status_code, $message=null)
    {
    	$response_data = [
    		'data' => $data,
    		'message' => $message,
    		'status' => $status_code
    	];

    	return response()->json($response_data, $status_code);
    }


}
