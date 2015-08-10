<?php

namespace Bloggy\Http\Controllers;

use Request, Auth, Session;
use Bloggy\Comment;
use Bloggy\Http\Requests;
use Bloggy\Http\Controllers\Controller;
use Bloggy\Http\Requests\CreateCommentRequest;

class CommentsController extends Controller
{

    public function __construct(){
        $this->middleware("auth");
    }

    public function index(){
        return redirect()->route('posts.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(CreateCommentRequest $request)
    {
        $test = Auth::user()->comments()->create($request->all()); //Create a new post tied to the current user

        session()->flash("flash_message","Your comment has been made.");
        return redirect()->route("posts.show",[$request->post_id]);
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
        $comment = Comment::findOrFail($id);
        $comment->update(Request::all());
        return redirect()->route("posts.show",[$comment->post_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $post_id = $comment->post_id;
        $comment->delete();

        session()->flash("flash_message","Your comment has been deleted.");
        return redirect()->route("posts.show",[$post_id]);
    }
}
