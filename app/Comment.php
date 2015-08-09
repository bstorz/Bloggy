<?php

namespace Bloggy;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        "title",
        "post_id",
        "author_id",
        "content"
    ];
    public function author(){
        return $this->belongsTo("Bloggy\Author");
    }
    public function post(){
        return $this->belongsTo("Bloggy\Post");
    }
}
