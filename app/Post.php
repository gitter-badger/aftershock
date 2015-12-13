<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{

    /**
     * Fillable fields for an Post.
     * 
     * @var array
     */
    protected $fillable = [
    	'title',
    	'body',
    	'published_at'
    ];

    /**
     * Additional field to treat as Carbon instances.
     * 
     * @var array
     */
    protected $dates = ['published_at'];

    /**
     * Find published post.
     * 
     * @param  $query
     * @return Response
     */
    public function scopePublished($query)
    {
    	$query->where('published_at', '<=', Carbon::now('Asia/Jakarta'));
    }

    /**
     * Find unpublished post.
     * 
     * @param  $query
     * @return Response
     */
    public function scopeUnublished($query)
    {
        $query->where('published_at', '>=', Carbon::now('Asia/Jakarta'));
    }

    /**
     * Set the published_at attribute.
     * 
     * @param $date
     */
    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date, 'Asia/Jakarta');
    }

    /**
     * Get the published_at attribute.
     * 
     * @param  $date
     * @return Response
     */
    public function getPublishedAtAttribute($date)
    {
        return Carbon::parse($date, 'Asia/Jakarta')->format('Y-m-d');
    }

    /**
     * An post is owned  by a user.
     * 
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
