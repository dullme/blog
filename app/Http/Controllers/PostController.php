<?php

namespace App\Http\Controllers;

use App\Post;
use File;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function show($id) {
        $post = Post::with('category')->published()->findOrFail($id);
        $next = Post::find($this->getNextPostId($post->id));
        $prev= Post::find($this->getPrevPostId($post->id));

        return view('post', compact('post', 'next', 'prev'));
    }

    protected function getPrevPostId($id) {

        return Post::where('id', '<', $id)->published()->max('id');
    }

    protected function getNextPostId($id) {

        return Post::where('id', '>', $id)->published()->min('id');
    }
}
