@extends('layouts.app')

@section('content')
<div class="container">
		<div class="row">
				<div class="col-md-8">
                        <div class="panel  panel-default">
                              <div class="panel-heading">
                                             Crear Categorias
                                                
			                      </div>
          

                      


                        <div class="panel-body">

                                        {!! Form::open(['route' => 'categories.store']) !!}
                                       
                                        @include('admin.categories.partials.form')
                                        
                                         {!! Form::close() !!}

                        </div>
                        </div>
				</div>
		</div>
</div>
@endsection