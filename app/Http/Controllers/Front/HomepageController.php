<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Post;  // Import model Post
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        $data = Post::where('status', 'publis')->orderBy('id', 'desc')->paginate(3);
        return view('components.front.home-page', compact('data'));
    }
}
