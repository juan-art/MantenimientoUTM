@extends('admin.layouts')  
@section('content')
<!-- jQuery -->  
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2 style="padding-top: 10px; font-weight: bold;"> ADMINISTRACIÓN DE LOS TIPOS DE MANTENIMIENTO DISPONIBLES</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li>
            <a class="collapse-link"><i class="tipoFinanciamientosfa"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#myModal_IngresarTipoMantenimiento"><i class="fa fa-plus-circle fa-3x"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content" id="datatable">
        <p class="text-muted font-13 m-b-30">
        </p>
        @include('tipo_mantenimiento.TablaTipoMantenimiento')
      </div>
    </div>
  </div>
</div>

<!--  Modal para modificar el tipo de mantenimiento-->
<div class="modal fade" id="myModal_ModificarTipoMantenimiento" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar Tipos de Mantenimiento</h4>
      </div>
      <div class="modal-body">          
            {!!Form::open(array('url'=>'','class'=>'frmActualizarTipoMantenimiento','method'=>'POST'))!!}
            <input  type="hidden" name="_token" value="{{csrf_token() }}" id="token">
              <input  type="hidden" name="" value="" id="IdTipoMantenimiento"> 
              {!!Form::label('Tipo_Mantenimiento:')!!}
              {!!Form::text('tipo_mantenimiento_A',null,['id'=>'tipo_mantenimiento_A', 'class'=>'form-control','placeholder'=>'Ingrese Tipo de Mantenimiento','required'=>''])!!}
              <span id="span_tipo_mantenimiento_A"></span>
              <span id="span_mensaje_tipo_mantenimiento_A" style="display: block;color: red;"></span>
              {!!Form::label('Descripcion:')!!}
              {!!Form::text('descripcion_A',null,['id'=>'descripcion_A', 'class'=>'form-control','placeholder'=>'Ingrese Descripcion','required'=>''])!!}
              <span id="span_Descripcion_A"></span>
              <span id="span_mensaje_descripcion_A" style="display: block;color: red;"></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        {!!link_to('#', $title='Actualizar', $attributes =['id'=>'btn_ActualizarTipoMantenimiento', 'class'=>'btn btn-success btn-guardar'],  $secure= null)!!}
         {!!Form::close()!!}
      </div>
    </div>
  </div>
</div>        
<!--  FIN Modal para Moidifcar Tipo de Mantenimiento-->


<!--  Modal para Ingresar Tipo de Mantenimiento -->
<div class="modal fade" id="myModal_IngresarTipoMantenimiento" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ingresar Tipo de Mantenimiento</h4>
      </div>
      <div class="modal-body">          
        {!!Form::open(array('url'=>'','id'=>'frmIngresarTipoMantenimiento','method'=>'POST'))!!}        
              <input  type="hidden" name="_token" value="{{csrf_token() }}" id="token">
              <input  type="hidden" name="" value="" id="IdTipoMantenimiento">
              {!!Form::label('Tipo_Mantenimiento:')!!}
              {!!Form::text('tipo_mantenimiento',null,['id'=>'tipo_mantenimiento', 'class'=>'form-control','placeholder'=>'Ingrese Tipo de Mantenimiento','required'=>''])!!}
              <span id="span_tipo_mantenimiento"></span>
              <span id="span_mensaje_tipo_mantenimiento" style="display: block;color: red;"></span>
              {!!Form::label('Descripcion:')!!}
              {!!Form::text('descripcion',null,['id'=>'descripcion', 'class'=>'form-control','placeholder'=>'Ingrese Descripcion','required'=>''])!!}
              <span id="span_Descripcion"></span>
              <span id="span_mensaje_descripcion" style="display: block;color: red;"></span>
      </div>
      <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-success" id="btn_IngresarTipoMantenimiento" >Registrar</button>
       {!!Form::close()!!}
      </div>
    </div>
  </div>
</div>        
@endsection
<!--  FIN Modal para tipo de mantenimiento -->

@section('js')
  {!!Html::script('js/tipo_mantenimiento.js')!!}
@endsection