<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UserController extends Controller
{
  public function userprofile() {

        if (Auth::check()) {

            $user = Auth::user();
            $posts = DB::table('posts')->where('author_id', $user->id)->get();
            return(view('web.post.user_profile', ['user' => $user, 'posts' => $posts]));
            //echo $posts; 
        }
    }

    public function editUserProfile() {

        if (Auth::check()) {

            $user = Auth::user();
            $posts = DB::table('posts')->where('author_id', $user->id)->get();

            return(view('users.edit_profile', ['user' => $user, 'posts' => $posts]));
            //echo $posts; 
        }
    }

    public function updateUserProfile(Request $request, $id) {

        if (Auth::check()) {

            $user = Auth::user();
            $posts = DB::table('posts')->where('author_id', $user->id)->get();

            $this->validate($request, [
                'full_name' => 'required',
                'email' => 'required',
                'location' => 'required',
                'description' => 'required',
            ]);
            $user = user::find($id);
            $user->full_name = $request->get('full_name');
            $user->email = $request->get('email');
            $user->location = $request->get('location');
            $user->description = $request->get('description');
            $user->save();
            return redirect()->route('users.edit_profile')->with('success', 'Profile Updated');

            // $full_name = $request->input('full_name');
            // $email = $request->input('email');
            // $location = $request->input('location');
            // $description = $request->input('description');
            // DB::update('update student set full_name = ?, email = ?, location = ?, description = ? where id = ?',[$first_name,$email,$location,$description,$id]);
            //$posts=DB::table('posts')->where('author_id', $user->id)->get();
            //echo "Record updated successfully.<br/>";
            //echo '<a href = "/user_profile">Click Here</a> to go back.';
            //return(view('web.post.user_profile',['user'=>$user,'posts'=>$posts]));
            //echo $posts; 
        }
    }

    public function updateAvatar(Request $request) {
        //handling the user upload of avatar
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300, 300)->save(public_path('/uploads/avatars/' . $filename));

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        $posts = DB::table('posts')->where('author_id', $user->id)->get();
        return(view('web.post.user_profile', ['user' => $user, 'posts' => $posts]));
    }
}
