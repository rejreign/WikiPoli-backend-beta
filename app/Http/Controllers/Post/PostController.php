<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Traits\HasError;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Politician;
use Spatie\Searchable\Search;
use App\PoliticianPost;
use App\PostTakeDown;

class PostController extends Controller {

    use HasError;

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('users.post.index');
    }

    public function create(Request $request) {
        $input = $request->all();
        $rules = [
            'title' => ['required', 'string', 'unique:posts'],
            'body' => 'required',
            'file' => 'required|max:1024|mimes:png,jpg,jpeg'
        ];

 
        $error = static::getErrorMessageAjax($input, $rules);
        if ($error) {
            return $error;
        }
        $name = $request->title;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $nameslug = $this->slug($name, $extension);
            $file->move(public_path('/post/images'), $nameslug);
            $input['file'] = 'post/images/' . $nameslug;
        }
        $input['status'] = 0;
        $input['author_id'] = Auth::user()->id;
        $title = $request->title;
        $input['slug'] = $this->makeSlug($title);
        
//check mention
        $body = strip_tags($request->body);

        $post = Post::create($input);
        $mentions = (new Search())
                ->registerModel(Politician::class, 'first_name', 'last_name')
                ->search($body);
        if (is_object($mentions)) {
            foreach ($mentions as $mention) {
                PoliticianPost::create([
                    'post_id' => $post->id,
                    'politician_id' => $mention->title
                ]);
            }
        }
        return ([
            'status' => 200,
            'message' => 'Post  Successfully Added , Waiting For Review'
        ]);
    }

    public function draft(Request $request) {

        return ([
            'status' => 422,
            'message' => 'Todo'
        ]);
    }
    public function takeDown(Request $request) {
        $input = $request->all();
       $rules = [
            'reason' => ['required']
        ];

 
        $error = static::getErrorMessageAjax($input, $rules);
        if ($error) {
            return $error;
        }
        PostTakeDown::create($input);
         return ([
            'status' => 200,
            'message' => 'Post Takedown Successfully Recoreded for Review'
        ]);
    }
   

}
