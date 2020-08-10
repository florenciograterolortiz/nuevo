<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
 protected $fillable = ['id','category_id','name','slug','excerpt','body','status','file','user_id'];

public function user(){

	return $this->belongsTo(User::class);
}
   

public function category(){

	return $this->belongsTo(Category::class);
}


public function tags(){

	return $this->belongsToMany(Tag::class);
}

}

