<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    public function index() {
    	$title = 'Welcome to SubServe!';
    	// return view('company.index', compact('title'));
    	return view('company.index')->with('title', $title);
    }

    public function about() {
    	// $title = 'About Us';
    	// return view('company.about')->with('title', $title);

    	$data = array (
    		'title' => 'About Us!',
    		'services' => ['Web Design', 'Programming', 'SEO']
    	);
    	return view('company.about')->with($data);
    }
}
