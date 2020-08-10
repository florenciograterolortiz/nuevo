@extends('layouts.app')

@section('content')
<div class="container">
		<div class="row">
				<div class="col-md-8">
                        <div class="panel  panel-default">
                              <div class="panel-heading">
                                            Editr Etiquetas
                                                
			                      </div>
          

                      


                        <div class="panel-body">

                                        {!! Form::model( $tag, ['route' => ['tags.update', $tag->id],

                                        'method' => 'PUT' ]) !!}
                                       
                                        @include('admin.tags.partials.form')
                                        
                                         {!! Form::close() !!}

                        </div>
                        </div>
				</div>
		</div>
</div>
@endsection