<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	/*
	beveiliging tegen mass assignment
	via form submit
	$input = $request->all();
	Article::create($input);
	zodat enkel de vars in $fillable upgedate mogen worden
	 */
	protected $fillable = [
	'title',
	'body',
	'published_at'
	];
}
