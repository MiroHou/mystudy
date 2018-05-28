<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function show(){
    	return 'hello world !!!';
    }
    public function info(){
    	return 'your name';
    }
}
