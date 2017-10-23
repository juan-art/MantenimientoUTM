<table id="" class="table table-striped table-bordered">
  <thead>
    <tr>
      <th style="width:40%;">TIPO DE MANTENIMIENTO</th>
      <th style="width:40%;">DESCRIPCIÓN</th>
      <th style="width:20%; text-align:center";></th>
    </tr>
  </thead>
  
  <tbody>  
    @foreach($tipo_mantenimiento as $tmant) 
      <tr>
        <td>{{$tmant->tipo_mantenimiento}}</td>
        <td>{{$tmant->descripcion}}</td>
        <td align="center">
          <div style="text-align:center"; class="btn-group" >
            <button  type="button" class="btn btn-default" >Acciones</button>
            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              <span class="caret"></span>
              <span class="sr-only">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu" role="menu">
              <li><a onclick="cargar_datos({{$tmant->id}})" href="#" data-toggle="modal" data-target="#myModal_ModificarTipoMantenimiento" >Modificar</a>
              </li>
              <li><a onclick="EliminarTipoMantenimiento({{$tmant->id}})" href="javascript:void(0)">Eliminar</a>
              </li>
            </ul>
          </div>  
        </td>
      </tr> 
    @endforeach                     
  </tbody>
</table>
