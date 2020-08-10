@extends('layouts.app')

@section('content')
<div class="container">
		<div class="row">
				<div class="col-md-8">
                        <div class="panel  panel-default">
                              <div class="panel-heading">
                                            Editar Categorias
                                                
			                      </div>
          

                      


                        <div class="panel-body">

                                        {!! Form::model( $post, ['route' => ['posts.update', $post->id],

                                        'method' => 'PUT' , 'files' => true ]) !!}
                                       
                                        @include('admin.posts.partials.form')
                                        
                                         {!! Form::close() !!}

                        </div>
                        </div>
				</div>
		</div>
</div>
@endsection