<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeCategoryController extends Controller
{
    public function homeIndex(){
    	return view('user.category');
    }
}
