@extends('layouts.app')

@section('content')
<div class="container">
	 <div class="col-md-8">

    
		   <h1>{{$post->name}}</h1>

			<div class="panel  panel-default">
					<div class="panel-heading">
              Categoria
             <a href="{{route('category', $post->category->slug)}}"> {{$post->category->name}}</a>        
			    </div>
          
            <div class="panel-body">


           <a href="#"><img class="img-responsive index-blk-img center-block" src=" {{$post->file}}" alt=""></a>
           

          <p>
          {{$post->excerpt}}
          </p>
         <hr>

         {!!$post->body!!}

         <hr>
         Etiquetas
   @foreach ($post->tags  as $item)
        <a href="{{route('tag', $item->slug)}}">{{$item->name}}</a>
   @endforeach
            </div>
             </div>
		
               

     </div>
</div>
@endsection