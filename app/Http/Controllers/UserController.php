<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    function name(){
        return "sheraz";
    }

    function nametwo(){
        // return "tayyab";
        return view('forviewpurpose');
    }

    function namethree($name){
        return "bzura".$name;
    }
    
    function admin(){
        // return "bzura";
        return view('admin.login');
    }
    
  
}
