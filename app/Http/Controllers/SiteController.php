<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Validator;

class SiteController extends Controller
{
	public function index(){
		return view('site.home');
	}   

	public function contact(){
		return view('site.contact');
	}
	
}
