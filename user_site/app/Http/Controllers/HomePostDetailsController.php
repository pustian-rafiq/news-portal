<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePostDetailsController extends Controller
{
     public function postIndex(){
    	return view('user.postDetails');
    }
}
