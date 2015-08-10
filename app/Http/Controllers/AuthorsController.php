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
}
