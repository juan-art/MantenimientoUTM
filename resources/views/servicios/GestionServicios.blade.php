@extends('admin.layouts')  
@section('content')
<!-- jQuery -->  
<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2 style="padding-top: 10px; font-weight: bold;"> ADMINISTRACIÓN DE SERVICIOS</h2>
        <ul class="nav navbar-right panel_toolbox">
          <li>
            <a class="collapse-link"><i class="tipoFinanciamientosfa"></i></a>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="modal" data-target="#myModal_IngresarServicio"><i class="fa fa-plus-circle fa-3x"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <div class="x_content" id="datatable">
        <p class="text-muted font-13 m-b-30">
        </p>
        @include('servicios.TablaServicios')
      </div>
    </div>
  </div>
</div>

<!--  Modal para modificar servicio-->
<div class="modal fade" id="myModal_ModificarServicios" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Actualizar Servicios </h4>
      </div>
      <div class="modal-body">          
            {!!Form::open(array('url'=>'','class'=>'frmActualizarServicios','method'=>'POST'))!!}
        
            <input  type="hidden" name="_token" value="{{csrf_token() }}" id="token">
              <input  type="hidden" name="" value="" id="IdServicio">           
           
              {!!Form::label('Servicio:')!!}
              {!!Form::text('servicio_A',null,['id'=>'servicio_A', 'class'=>'form-control','placeholder'=>'Ingrese Servicio','required'=>''])!!}
              <span id="span_Servicio_A"></span>
              <span id="span_mensaje_servicio_A" style="display: block;color: red;"></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        {!!link_to('#', $title='Actualizar', $attributes =['id'=>'btn_ActualizarServicios', 'class'=>'btn btn-success btn-guardar'],  $secure= null)!!}
         {!!Form::close()!!}
      </div>
    </div>
  </div>
</div>        
<!--  FIN Modal para Moidifcar servicio-->


<!--  Modal para Ingresar servicio -->
<div class="modal fade" id="myModal_IngresarServicio" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ingresar Servicio</h4>
      </div>
      <div class="modal-body">
          
        {!!Form::open(array('url'=>'','id'=>'frmIngresarServicio','method'=>'POST'))!!}
        
              <input  type="hidden" name="_token" value="{{csrf_token() }}" id="token">
              <input  type="hidden" name="" value="" id="IdServicio">
              {!!Form::label('Servicio:')!!}
              {!!Form::text('tipo_servicio',null,['id'=>'tipo_servicio', 'class'=>'form-control','placeholder'=>'Ingrese Servicio','required'=>''])!!}
              <span id="span_Servicio"></span>
              <span id="span_mensaje_servicio" style="display: block;color: red;"></span>

              {!!Form::label('Descripcion:')!!}
              {!!Form::text('descripcion',null,['id'=>'descripcion', 'class'=>'form-control','placeholder'=>'Ingrese Descripcion','required'=>''])!!}
              <span id="span_Descripcion"></span>
              <span id="span_mensaje_descripcion" style="display: block;color: red;"></span>

      </div>
      <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-success" id="btn_IngresarServicio" >Registrar</button>
       {!!Form::close()!!}
      </div>
    </div>
  </div>
</div>        
@endsection
<!--  FIN Modal para servicio -->

@section('js')
  {!!Html::script('js/servicio.js')!!}
@endsection