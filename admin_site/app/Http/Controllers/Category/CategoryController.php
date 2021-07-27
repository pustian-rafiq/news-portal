<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
	public function index(){
		return view('admin.category.index');
	}

	public function createCategory(){
		return view('admin.category.create');
	}

	public function editCategory(){
		return view('admin.category.edit');
	}
    
}
