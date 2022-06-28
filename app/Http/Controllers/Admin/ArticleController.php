<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $posts = Post::all();
        return  view('admin.articles.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return  view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Form validation
        $this->validate($request, [
            'user_id' => 'required',
            'title' => 'required',
            'short_description' => 'required',
            'post_data' => 'required',
            'tags' => 'required',


        ]);
        //  Store data in database
        Post::create($request->all());
        //
        return back()->with('success', 'We hebben uw bericht ontvangen!');
    }

    /**
     * Display the specified resource.
     *
     * @param  post $posts
     * @return View
     */
    public function show($id): View
    {
        $post = Post::find($id);
        return view('admin.articles.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post $posts
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.articles.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \app\Models\Post $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $posts = Post::find($request->id);
        $posts->user_id = $request->user_id;
        $posts->title = $request->title;
        $posts->short_description = $request->short_description;
        $posts->post_data = $request->post_data;
        $posts->tags = $request->tags;
//        dd($posts);
        $posts->save();

        return to_route('articles.index');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post $posts
     * @return View
     */
    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return to_route('articles.index');
    }

}
