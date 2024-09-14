<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    //

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
    
  
}
