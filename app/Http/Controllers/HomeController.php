<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        echo "this is our first Controller";
    }
    public function call(){
        $users = ["akhil","briju","banki"];
        return view('call',array("user1"=>$users));
    }
}
