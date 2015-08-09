<?php

namespace Bloggy\Http\Controllers;

use Request, Auth, Session;
use Bloggy\Author;
use Bloggy\Http\Requests;
use Bloggy\Http\Controllers\Controller;
use Bloggy\Http\Requests\CreateCommentRequest;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $authors = Author::latest("updated_at")->get();
        return view("authors.index")->with("authors",$authors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    /*public function create()
    {
        return view("posts.create");
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    /*public function store(CreateCommentRequest $request)
    {
        Auth::user()->comments()->create($request->all()); //Create a new post tied to the current user

        session()->flash("flash_message","Your comment has been made.");
        return redirect()->route("posts",[$request->post_id]);
    }*/

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $author = Author::findOrFail($id);
        return view("authors.show")->with("author",$author);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    /*public function edit($id)
    {
        $comment = Comment::findOrFail($id);
        return view("comments.edit",compact("comment"));
    }*/

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    /*public function update(Request $request, $id)
    {
        $comment = Comment::findOrFail($id);
        $comment->update(Request::all());
        return redirect()->route("posts.show",[$comment->post_id]);
    }*

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    /*public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $post_id = $comment->post_id;
        $comment->delete();

        session()->flash("flash_message","Your comment has been deleted.");
        return redirect()->route("posts.show",[$post_id]);
    }*/
}
