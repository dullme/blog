<?php

namespace App\Http\Controllers;

use File;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function show() {

       $content = (new \Parsedown())->text(File::get(resource_path('docs/brush-mi-3-to-padavan.md')));

       return view('post3', compact('content'));
    }
}
