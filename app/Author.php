<?php

namespace Bloggy;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function post(){
        return $this->hasMany("App\Post");
    }
}
