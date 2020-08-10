@extends('layouts.app')

@section('content')
<div class="container">
		<div class="row">
				<div class="col-md-8">
                        <div class="panel  panel-default">
                              <div class="panel-heading">
                                             Crear Post
                                                
			                      </div>
          

                      


                        <div class="panel-body">

                                        {!! Form::open(['route' => 'posts.store', 'files' => true]) !!}
                                       
                                        @include('admin.posts.partials.form')
                                        
                                         {!! Form::close() !!}

                        </div>
                        </div>
				</div>
		</div>
</div>
@endsection