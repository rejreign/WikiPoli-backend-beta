<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Auth;

//Importing laravel-permission models
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

//Enables us to output flash messaging
use Session;



class SuperController extends Controller{


    public function index() {
        //Get all users and pass it to the view
            $users = User::all(); 
            foreach ($users as $user) {

                //echo $user.'<br><br><br>';
                if($user->hasRole('SuperAdmin')){

                    echo "A fucking user"."<br><br><br>";
                    echo $user->getAllPermissions();
                }else{

                    echo "Not a fucking user"."<br><br><br>";
                }
            }
            // view('users.index')->with('users', $users);
        }
}
?>