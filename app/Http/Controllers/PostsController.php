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
	 * Middleware in post page.
	 */
	public function __construct()
    {
        $this->middleware('auth', ['only' => ['create', 'edit']]);
    }

	/**
	 * Display list post.
	 * 
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::latest('published_at')->published()->get();

		return view('posts.index', compact('posts'));
	}

	/**
	 * Show single an post.
	 * 
	 * @param  Post $posts
	 * @return Response
	 */
	public function show(Post $posts)
	{
		return view('posts.show', compact('posts'));
	}

	/**
	 * Form for create new post.
	 * 
	 * @return Response
	 */
	public function create()
	{
		return view('posts.create');
	}

	/**
	 * Save an new post.
	 * 
	 * @param  PostRequest $request
	 * @return Response
	 */
	public function store(PostRequest $request)
	{
		\Auth::user()->post()->create($request->all());

		return redirect('posts');
	}

	/**
	 * Edit your post.
	 * 
	 * @return Response
	 */
	public function edit(Post $posts)
	{
		return view('posts.edit', compact('posts'));
	}

	/**
	 * Update your post.
	 * 
	 * @param  Post        $posts
	 * @param  PostRequest $request
	 * @return Response
	 */
	public function update(Post $posts, PostRequest $request)
	{
		$posts->update($request->all());

		return redirect('posts');
	}
}
