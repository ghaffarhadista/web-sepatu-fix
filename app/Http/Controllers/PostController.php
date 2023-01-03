<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return view('product', [
            "title" => "Product",
             "active" => 'product',
            "posts" => Post::all()
        ]); 
    }

    public function show(Post $post)
    {
        return view('post', [
            "title" => "Pemesanan",
            "active" => 'product',
            "post" => $post,
        ]);
    }
}
