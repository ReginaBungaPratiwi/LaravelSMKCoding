<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Post;  // Import model Post
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        $lastData = $this->lastData();
        
        $Post = Post::where('status', 'publish')->where('id', '!=', $lastData->id)->orderBy('id', 'desc')
        ->paginate(3);
        
        return view('components.front.home-page', compact('Post', 'lastData'));
    }

    private function lastData(){
        $Post = Post::where('status', 'publish')->orderBy('id', 'desc')->latest()->first();
        return $Post;
    }
   
}
