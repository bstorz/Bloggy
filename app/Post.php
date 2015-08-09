<?php

namespace Bloggy;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        "title",
        "content",
        "author_id"
    ];
    public function author(){
        $this->belongsTo("Bloggy\Author");
    }
}
