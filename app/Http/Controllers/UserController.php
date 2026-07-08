<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function deema (){
        return "welcome deema";
    }
      public function country ($name){
        return"Your country is ".$name;
    }
}
