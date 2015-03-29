<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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
        'published_at',
        'user_id' //temporary
	];

    /*
     * de velden hier gedefinieerd worden als carbon instances opgehaald
     */
    protected $dates = [
        'published_at' //$article->published_at->format('Y-m');
    ];

    public function scopePublished($query)
    {
        /*
         * dan kan je in uw model
         * $articles = Article::latest('published_at')->published()->get();
         * ipv
         * $articles = Article::orderBy('published_at', 'desc')->where('published_at', '<=', Carbon::now())->get();
         * doen
         */
        $query->where('published_at', '<=', Carbon::now());
    }

    public function scopeUnPublished($query)
    {
        $query->where('published_at', '>', Carbon::now());
    }

    //setNameAttr
    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);
    }

    /**
     * An artigle is owned by a user
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(){
        return $this->belongsTo('App\User');
    }
}