@extends('layouts.app')

@section('content')
<div class="container">
		<div class="row">
				<div class="col-md-8">
                        <div class="panel  panel-default">
                              <div class="panel-heading">
                                              List de  Categorias
                                                      <a href="{{route('categories.create')}}" class="btn btn-sm btn-primary pull-right">Crear</a>        
			                   </div>
          

                      


                        <div class="panel-body">

                        	<table class="table  table-.striped   table-hover">

                        		<thead>

                        			<tr>

                                     <th width="10px">ID</th>

                                     <th>NOMBRE</th>

                                     <th colspan="3">&nbsp</th>

                        			</tr>




                        		</thead>

                        		<tbody>

                        			@foreach ($categories  as $item)
                                   	<tr>
                                        <th>{{$item -> id}}</th>
                                        <th>{{$item -> name}}</th>
                                        <td width="10px"><a class="btn btn-sm btn-default " href="{{route('categories.show',$item->id)}}">ver</a></td>
                                        <td width="10px"><a class="btn btn-sm btn-default " href="{{route('categories.edit',$item->id)}}">edit</a></td>
                                        <td width="10px">  {!! Form::open(['route' => ['categories.destroy',$item -> id],
                                        'method' => 'DELETE']) !!}
                                          <button class="btn btn-sm btn-danger " >Eliminr</button>
                                        {!! Form::close() !!}</td>


                        			</tr>


                             @endforeach



                        		</tbody>


                        	</table>


                        </div>
                        </div>
				</div>
		</div>
</div>
@endsection