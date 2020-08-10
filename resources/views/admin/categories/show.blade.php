@extends('layouts.app')

@section('content')
<div class="container">
		<div class="row">
				<div class="col-md-8">
                        <div class="panel  panel-default">
                              <div class="panel-heading">
                                           Ver Etiquetas
                                                
			                      </div>
          

                      


                        <div class="panel-body">
                              <p><strong>NOMBRE:</strong>{{$category->name}}</p>
                              <p><strong>SLUG:</strong>{{$category->slug}}</p>
                                <p><strong>CONTENIDO:</strong>{{$category->body}}</p>
                        </div>
                        </div>
				</div>
		</div>
</div>
@endsection