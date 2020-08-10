@extends('layouts.app')

@section('content')
<div class="container">
	 <div class="col-md-8">
       
		   <h1>Lista de Post</h1>
          
 			 @foreach ($posts as $post)
			<div class="panel  panel-default">
					<div class="panel-heading">
                       <h2> {{$post->name}}</h2>
			</div>
          
            <div class="panel-body">

              <subtitulo-component></subtitulo-component>
          <a href="#"><img class="img-responsive index-blk-img center-block" src=" {{$post->file}}" alt=""></a>
           

          <p>
             {!!$post->excerpt!!}
          </p>
          
          <p>
             {!!$post->body!!}
          </p>
          
           <a class="product-review" href="{{route('post',$post->slug)}}">Mas Detalles</a>
            </div>
             </div>
		
                @endforeach

     </div>
</div>
@endsection