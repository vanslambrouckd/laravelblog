<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


use App\Article;
use Carbon\Carbon;

class ArticlesController extends Controller {


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//$articles = Article::all();
		//$articles = Article::latest()->get();

		//$articles = Article::orderBy('published_at', 'desc')->where('published_at', '<=', Carbon::now())->get();
        $articles = Article::latest('published_at')->published()->get();
		return view('articles.index', compact('articles'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('articles.create');
	}


    /**
     * @param Requests\CreateArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Requests\CreateArticleRequest $request)
    //public function store(Request $request)
	{
        /*
        $this->validate($request, [
                'title' => 'required|min:3',
                'body'  => 'required',
                'published_at' => 'required|date'
		]);
        */

		//dd($input);
        //validation getriggered via Http/Requests/CreateArticleRequest.php functie rules()
		Article::create($request->all());

		return redirect('articles');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function show($id)
	{
		$article = Article::findOrFaifunl($id);

		return view('articles.show', compact('article'));
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
