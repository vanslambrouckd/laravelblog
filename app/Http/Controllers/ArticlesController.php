<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;

use App\Article;
use Carbon\Carbon;

class ArticlesController extends Controller {


    public function __construct()
    {
        //zie App\Http\Kernel.php
        //$this->middleware('auth'); //op alle routes van articles

        $this->middleware('auth', ['except' => 'index']);
        //$this->middleware('auth', ['only' => 'create']);
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        if (!Auth::guest()) {
            //return \Auth::user(); //toont authenticated user
        }


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
        /*
        if ((Auth::guest())) {
            return redirect('articles');
        }
        */
		return view('articles.create');
	}

    /**
     * @param Requests\ArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Requests\ArticleRequest $request)
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
        //validation getriggered via Http/Requests/ArticleRequest.php functie rules()

        $article = new Article($request->all()); //user_id wordt automatisch ingevuld op deze manier
        Auth::user()->articles()->save($article);

        /*
        $request['user_id'] = Auth::id();
        Article::create($request->all());
        */
		return redirect('articles');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	//public function show($id)
    public function show(Article $article)
	{
		//$article = Article::findOrFail($id);

		return view('articles.show', compact('article'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Article $article)
	{
        $article->published_at->setToStringFormat('Y-m-d');

        return view('articles.edit', compact('article'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Article $article, Requests\ArticleRequest $request)
	{
        $article->update($request->all());

        return redirect('articles');
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
