<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;

class UserController extends Controller
{
	public function register()
	{
    return view('auth.register');
	}
  
	public function login()
	{
    return view('auth.login');
	}
  
	public function admin_login()
	{
    return view('auth.admin_login');
	}

	public function staff_list()
	{
    return view('staff_list');
	}
}
