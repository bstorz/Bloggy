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
        return $this->belongsTo("Bloggy\Author");
    }
    public function comments(){
        return $this->hasMany("Bloggy\Comment");
    }
}
