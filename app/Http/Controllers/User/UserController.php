<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\HasError;
use App\UserProfile;
use App\User;
use Illuminate\Support\Facades\Auth;
use Image;

class UserController extends Controller {

    use HasError;

    public function __construct() {
        $this->middleware('auth');
    }
 
    public function profile() {
        return view('users.profile.index');
    }

    public function settings(Request $request) {
        //$posts = DB::table('posts')->where('author_id', Auth::user()->id)->get();
        return view('users.profile.settings');
    }


    public function edit(Request $request) {

        $user = UserProfile::firstOrNew(array('user_id' => (Auth::user()->id)));
        $user->user_id = Auth::user()->id;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->dob = $request->dob;
        $user->gender = $request->gender;
        $user->state = $request->state;
        $user->facebook_url = $request->facebook_url;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->twitter_url = $request->twitter_url;
        $user->linkedin_url = $request->linkedin_url;
        $user->save();
        //user
        User::whereId(Auth::user()->id)->update(['email' => $request->email]);
        session()->flash('message.alert', 'success');
        session()->flash('message.content', "Profile Updated");
        return back();
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
        //$posts = DB::table('posts')->where('author_id', $user->id)->get();
        return(view('users.profile.settings', ['user' => $user]));
    }

}
