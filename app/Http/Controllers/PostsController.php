<?php 

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;
use App\Http\Requests;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\Controller;

class PostsController extends Controller
{

	/**
	 * Middleware in articles page
	 */
	public function __construct()
    {
        $this->middleware('auth', ['only' => 'edit']);
    }

	/**
	 * Display list article.
	 * 
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::latest('published_at')->published()->get();

		return view('posts.index', compact('posts'));
	}

	/**
	 * Show single an article
	 * 
	 * @param  Article $articles
	 * @return Response
	 */
	public function show(Post $posts)
	{
		return view('posts.show', compact('posts'));
	}

	/**
	 * Form article
	 * 
	 * @return Response
	 */
	public function create()
	{
		return view('posts.create');
	}

	/**
	 * Save an new article
	 * 
	 * @param  ArticleRequest $request
	 * @return Response
	 */
	public function store(PostRequest $request)
	{
		\Auth::user()->post()->create($request->all());

		return redirect('posts');
	}

	/**
	 * Edit form ur article
	 * 
	 * @return Response
	 */
	public function edit(Post $posts)
	{
		return view('posts.edit', compact('posts'));
	}

	/**
	 * Update ur article
	 * 
	 * @param  Article        $articles
	 * @param  ArticleRequest $request
	 * @return Response
	 */
	public function update(Post $posts, PostRequest $request)
	{
		$posts->update($request->all());

		return redirect('posts');
	}
	
}
