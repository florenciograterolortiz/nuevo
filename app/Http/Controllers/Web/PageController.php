<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\Category;
use App\Tag;
class PageController extends Controller
{
  
public function blog(){
$posts = DB::table('posts')->paginate(3);
return view('web.posts', compact('posts'));
}



public function post($slug){

	$post = Post::where('slug' , $slug)->first();
	return view('web.post', compact('post' ));

}



public function category($slug){

$category = Category::where('slug' , $slug)->pluck('id')->first();
	
  
  $posts = Post::where('category_id','like','%'.$category.'%')->get();

  return view('web.posts', compact('posts' ));

}


public function tag($slug){

$posts = Post::whereHas('tags' ,function($query) use ($slug){
$query->where('slug', $slug);
});
  return view('web.posts', compact('posts' ));

}


}





