<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

/*
 * gemaakt via php artisan make:request CreateArticleRequest
 */
class ArticleRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */

    /*
     * indien update en insert form validation rules verschillen:
     * nieuwe Http/Requests/Request class maken en die gebruiken
     * of update rules dynamisch (*)
     */
	public function rules()
	{
		return [
            'title' => 'required|min:3',
            'body'  => 'required',
            'published_at' => 'required|date'
		];

        /*
         *
         */
        /*

        if (!$condition) {
            $rules['something'] = 'required'
        }
         */
	}

}
