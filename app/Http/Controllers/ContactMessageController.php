<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;

class ContactMessageController extends Controller
{
	public function create()
	{
    	return view('contact');
    }

   	public function mail( ContactRequest $request)
	{
    	return view('contact');
    }
}
