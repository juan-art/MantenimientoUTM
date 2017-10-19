@extends('admin.layouts')

@section('content')
	{!!Form::open(['class'=>'form-horizontal', 'id'=>'frmCruzRoja', 'method'=>'POST'])!!}

	{!!Form::label('Programa:')!!}
              {!!Form::text('programa_A',null,['id'=>'programa_A', 'class'=>'form-control','placeholder'=>'Ingrese Programa','required'=>''])!!}

	{!!Form::close()!!}	
@endsection

@section('js')




@endsection