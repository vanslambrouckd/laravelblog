<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


use App\Article;

class ArticlesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{		
		$articles = Article::all();

		return view('articles.index', compact('articles'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
		$article = new Article();
		$article->title = "article title";
		$article->body = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dui enim, hendrerit a sem nec, pulvinar iaculis sapien. Quisque hendrerit, lectus ac aliquet fermentum, orci neque porta lorem, ac laoreet justo lacus non metus. Ut ac justo sodales, ullamcorper orci eu, egestas velit. Nulla porttitor mauris risus, quis viverra tortor cursus ac. Ut accumsan porta sapien, nec luctus tellus lacinia vel. Fusce varius a dolor et interdum. Proin sit amet rhoncus massa. Quisque eget cursus eros.";
		$article->published_at = Carbon::now();
		$article->save();
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
