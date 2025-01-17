<?php

namespace App\Http\Controllers\Front;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogDetailController extends Controller
{
    function detail($slug){
        //echo $slug;
        $data = Post::where('status', 'publish')->where('slug', $slug)->firstOrFail();
        return view('components.front.blog-detail', compact('data'));
    }
}
