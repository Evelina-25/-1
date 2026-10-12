<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        //$post = new Post();
       //$post->title = 'Yandex company';
        //$post->anons = 'Yandex is cool';
       // $post->text = 'Yandex is cool company';
       // $post->save();

        //$posts = Post::all();
        //$posts = Post::find([8,9]);
        //$posts = Post::where('id', '>', '8')->get();
        //$posts = Post::inRandomOrder()->limit(2)->get();
        $posts = Post::orderBy('id', 'desc')->get();
        return view ('posts.index')->with('posts', $posts);
    }
}
