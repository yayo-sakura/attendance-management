<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function correction_request_list()
	{
    return view('correction_request_list');
	}

    public function correction_request_approve()
	{
    return view('correction_request_approve');
	}
}
