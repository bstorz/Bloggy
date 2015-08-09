<?php

namespace Bloggy\Http\Controllers;

use Bloggy\Post;
use Bloggy\Http\Requests;
use Bloggy\Http\Controllers\Controller;
use Request, Auth;
use Bloggy\Http\Requests\CreatePostRequest;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::latest("updated_at")->get();
        return view("posts.index")->with("posts",$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CreatePostRequest $request)
    {
        $post = new Post($request->all());
        Auth::user()->posts()->save($post); //Create a new post tied to the current user
        return redirect("posts");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view("posts.show")->with("post",$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view("posts.edit",compact("post"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->update(Request::all());
        return redirect()->route("posts.show",[$id]);
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
