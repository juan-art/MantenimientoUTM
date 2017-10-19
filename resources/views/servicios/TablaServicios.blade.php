<table id="" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th style="width:40%;">SERVICIO</th>
        <th style="width:40%;">DESCRIPCIÓN</th>
        <th style="width:20%; text-align:center";></th>
      </tr>
    </thead>
    <tbody>                       
              @foreach($servicios as $ser) 
                        <tr>
                          <td>{{$ser->tipo_servicio}}</td>
                          <td>{{$ser->descripcion}}</td>
                          <td align="center">
                            <div style="text-align:center"; class="btn-group" >
                                <button  type="button" class="btn btn-default" >Acciones</button>
                                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a onclick="cargar_datos({{$ser->id}})" href="#" data-toggle="modal" data-target="#myModal_ModificarServicio" >Modificar</a>
                                        </li>
                                        <li><a onclick="EliminarServicio({{$ser->id}})" href="javascript:void(0)">Eliminar</a>
                                    </li>
                                    </ul>
                            </div>  
                          </td>
                        </tr> 
                        @endforeach                     
                      </tbody>
                    </table>
