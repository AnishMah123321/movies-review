<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
    	$tasks = [
		'Buy Grocery',
        'Buy Utencils',
        'Buy Clothes'

	];
	return view('welcome', [
       'tasks' => $tasks
	]);
}
}
