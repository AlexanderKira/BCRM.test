<?php

namespace App\Http\Controllers\Posts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){

        $post = (object) [
            'id' => 123,
            'title' => 'texttext',
            'content' => 'texttexttexttext',
        ];

        $posts = array_fill(0, 10, $post);

        return view('blog.index', compact('posts'));
    }

    public function show($post){
        $post = (object) [
            'id' => 123,
            'title' => 'texttext',
            'content' => 'texttexttexttext',
        ];

        return view('blog.show', compact('post'));
    }

    public function like($post){
        return 'Поставить лайк';
    }
}
