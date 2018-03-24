<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
    	return view('content/index');
    }

    public function apps()
    {
    	return view('content/apps');
    }

    public function experiences()
    {
    	return view('content/experiences');
    }
}
