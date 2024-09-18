<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //

    function aboutt(){
        return view('aboutt');
    }

    function name(){
        return "sheraz";
    }

    function nametwo(){
        // return "tayyab";
        $name = "bzura";
        $users = ['anil', "bazure","sheraz"];
        return view('forviewpurpose',["name"=>$name],["users"=>$users]);
        
    }

    function namethree($name){
        return "bzura".$name;
    }
    
    function admin(){
        // return "bzura";
        if (View::exists('admin.login')) {
            # code...
            return view('admin.login');

        } else {
            echo "it does not exists";
        }
    }


    function addUser(Request $req){
        echo "added";
        echo $req->name;
        echo "<br>";
        echo $req->email;
        echo "<br>";
        echo $req->city;
        $req->validate([
            'name'=>'required',
            'email'=>'required',
            'city'=>'required',

        ]);
        // echo "ok";
    }


    function users(){
      $users =  DB::select('select * from users');
    // return DB::table('users')->get();      // how to get
      return view('users',['users'=>$users]);


//    $data= DB::table('users')->insert([
//         'id'=>'3',
//         'name'=>"tayyab",
//         'email'=>"this@gmail.com",
//         'city'=>"lahore"
//     ]);
//     if ($data) {
//         # code...
//         echo "data has been inserted";
//     } else {
//         echo "not inserted";
//     }


    }
    
  
}
