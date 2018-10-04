<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Category;
use App\Post;
class FrontEndController extends Controller
{
    public function index(){
    	return view('index')->with('settings',Setting::first())
    						->with('categories',Category::take(7)->get())
    						->with('first',Post::orderBy('created_at','desc')->first())
    						->with('second',Post::orderBy('created_at','desc')->skip(1)->take(1)->get()->first())
    						->with('third',Post::orderBy('created_at','desc')->skip(2)->take(1)->get()->first())
    						->with('categories',Category::all())
    						;
    }
}
