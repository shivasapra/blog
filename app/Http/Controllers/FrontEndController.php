<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use App\Category;
use App\Post;
use App\Tag;
class FrontEndController extends Controller
{
    public function index(){
    	return view('index')->with('settings',Setting::first())
    						->with('categories',Category::take(7)->get())
    						->with('first',Post::orderBy('created_at','desc')->first())
    						->with('second',Post::orderBy('created_at','desc')->skip(1)->take(1)->get()->first())
    						->with('third',Post::orderBy('created_at','desc')->skip(2)->take(1)->get()->first())
    						->with('categories',Category::all());
    }

    public function postSingle($slug){
    	$post = Post::where('slug', $slug)->first();
        $next_id = Post::where('id', '>', $post->id)->min('id');
        $prev_id = Post::where('id', '<', $post->id)->max('id');
    	return view('single')->with('post',$post)
    						 ->with('settings',Setting::first())
    						 ->with('categories',Category::take(7)->get())
                             ->with('next',Post::find($next_id))
                             ->with('prev',Post::find($prev_id))
                             ->with('tags',Tag::all());
    }

    public function category($id){
        $category = Category::find($id);
        return view('category')->with('title',$category->name)
                               ->with('category',$category)
                               ->with('categories',Category::take(7)->get())
                               ->with('settings',Setting::first());
                               

    }

    public function tag($id){
        $tag = Tag::find($id);
        return view('tag')->with('title',$tag->tag)
                          ->with('tag',$tag)
                          ->with('categories',Category::take(7)->get())
                          ->with('settings',Setting::first());
    }
}
