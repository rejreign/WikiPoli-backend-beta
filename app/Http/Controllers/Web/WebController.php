<?php

namespace App\Http\Controllers\Web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
class WebController extends Controller
{
    public function index() {
      $data['posts'] = Post::with('user')->orderBy('id', 'DESC')->paginate(8); 
      return view('web.post.index', $data);
      
    }
    
     public function home() {
      $data['posts'] = Post::with('user')->orderBy('id', 'DESC')->take(8)->get(); 
      return view('web.index', $data);
      
    }
}
