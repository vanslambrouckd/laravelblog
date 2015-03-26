<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function about() {
		$firstname = 'david';
		$lastname = 'vansl';
        $people = [
            'David vansl', 'Delphine vansl'
        ];

		//return view('pages.about', ['firstname' => $firstname, 'lastname' => $lastname]);
		return view('pages.about', compact('firstname', 'lastname', 'people'));
	}

	public function contact() {
		return view('pages.contact');
	}
}
