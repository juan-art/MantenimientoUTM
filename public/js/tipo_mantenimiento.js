/// -- Ingresar
/*Validación del campo tipo de mantenimiento*/
  $('#tipo_mantenimiento').blur(function(){
    var tipo_mantenimiento = $("#tipo_mantenimiento").val();
    if (tipo_mantenimiento.indexOf('')== -1){
      $('#tipo_mantenimiento').addClass('error');
      $('#tipo_mantenimiento').html('Ingrese el Tipo de Mantenimiento');
    }else{      
      $('#programa').removeClass('error');
      $('#span_tipo_mantenimiento').removeClass('error_span');
      $('#span_mensaje_tipo_mantenimiento').html('');
    }      
  });
// fin
       
/*Validaci[on del campo descripcion*/
  $('#descripcion').blur(function(){
    var descripcion = $("#descripcion").val();
    if (descripcion.indexOf('')== -1){
      $('#descripcion').addClass('error');
      $('#descripcion').html('Ingrese Descripcion');
    }else{
      $('#descripcion').removeClass('error');
      $('#span_descripcion').removeClass('error_span');
      $('#span_mensaje_descripcion').html('');
    }      
  }); 
// fin
/// -- Fin Ingresar

/// -- Actualizar
/*Validación del campo tipo mantenimiento*/
  $('#tipo_mantenimiento_A').blur(function(){
    var tipo_mantenimiento_A = $("#tipo_mantenimiento_A").val();
    if (tipo_mantenimiento_A.indexOf('')== -1){
      $('#tipo_mantenimiento_A').addClass('error');
      $('#tipo_mantenimiento_A').html('Ingrese Programa');
    }else{
      $('#tipo_mantenimiento_A').removeClass('error');
      $('#span_tipo_mantenimiento_A').removeClass('error_span');
      $('#span_mensaje_tipo_mantenimiento_A').html('');
    }      
  }); 
// fin
        
/*Validación del campo descripcion*/
  $('#descripcion_A').blur(function(){
    var descripcion_A = $("#descripcion_A").val();
    if (descripcion_A.indexOf('')== -1){
      $('#descripcion_A').addClass('error');
      $('#descripcion_A').html('Ingrese descripcion ');
    }else{
      $('#descripcion_A').removeClass('error');
      $('#span_descripcion_A').removeClass('error_span');
      $('#span_mensaje_descripcion_A').html('');
    }      
  }); 
// fin
// -- Fin Actualizar


//click al boton Registrar Tipo de Mantenimiento
$("#btn_IngresarTipoMantenimiento").click(function(){
  if($('#tipo_mantenimiento').val()=="" && $('#descripcion').val()==""){
    var animate_in = 'lightSpeedIn',
    animate_out = 'bounceOut';
    new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios', 
      type: 'error',delay: 2500,
      animate: {animate: true,in_class: animate_in,out_class: animate_out}
    });
    $('#tipo_mantenimiento').addClass('error');
    $('#descripcion').addClass('error');
  }else if($('#tipo_mantenimiento').val()==""){
    $('#tipo_mantenimiento').addClass('error');
    $('#span_tipo_mantenimiento').addClass('error_span');
    $('#span_mensaje_tipo_mantenimiento').html('Ingrese el Tipo de Mantenimiento');
    var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
    new PNotify({title: 'Alerta',text: 'Por favor! ingrese el tipo de mantenimiento',
      type: 'error',delay: 2500,
      animate: {animate: true,in_class: animate_in,out_class: animate_out}
    });
  }else if($('#descripcion').val()==""){
    $('#descripcion').addClass('error');
    $('#span_descripcion').addClass('error_span');
    $('#span_mensaje_descripcion').html('Ingrese descripcion');
    var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
    new PNotify({title: 'Alerta',text: 'Por favor! ingrese descripcion',
      type: 'error',delay: 2500,
      animate: {animate: true,in_class: animate_in,out_class: animate_out}
    });
  }else{
    registrar_tipo_mantenimiento();
  }
});

// funcion para registar tipos de mantenimiento
function registrar_tipo_mantenimiento(){    
  var token = new $('#token').val();
  var datos = new FormData($("#frmIngresarTipoMantenimiento")[0]);
  $.ajax({
    url: "/tipo_mantenimiento",
    headers: {'X-CSRF-TOKEN': token},
    type: 'POST',
    dataType: 'json',
    contentType: false,
    processData: false,
    data: datos,
    success:function(res){
      if(res.registro==true){
        swal("Tipo de Mantenimiento Registrado Correctamente..!", "", "success");
        document.getElementById("frmIngresarTipoMantenimiento").reset();  
        $("#myModal_IngresarTipoMantenimiento").modal("hide");
        $("#datatable").load("/lista_tipo_mantenimiento");
      }
    }
  });
}
// fin de registro de tipo de mantenimiento

// Actualizar Tipo de Manteniminento
  $("#btn_ActualizarTipoMantenimiento").click(function(){
    if($('#tipo_mantenimiento_A').val()=="" && $('#descripcion_A').val()==""){
      var animate_in = 'lightSpeedIn',
      animate_out = 'bounceOut';
      new PNotify({title: 'Alerta Faltan datos',text: 'Por favor! algunos campos estan vacios',
        type: 'error',delay: 2500,
        animate: {animate: true,in_class: animate_in,out_class: animate_out}
      });
      $('#tipo_mantenimiento_A').addClass('error');
      $('#descripcion_A').addClass('error');

    }else if($('#tipo_mantenimiento_A').val()==""){
      $('#tipo_mantenimiento_A').addClass('error');
      $('#span_tipo_mantenimiento_A').addClass('error_span');
      $('#span_tipo_mantenimiento_A').html('Ingrese Tipo de Mantenimiento');
      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
      new PNotify({title: 'Alerta',text: 'Por favor! ingrese el tipo de mantenimiento',
        type: 'error',delay: 2500,
        animate: {animate: true,in_class: animate_in,out_class: animate_out}
      });
    }else if($('#descripcion_A').val()==""){      
      $('#descripcion_A').addClass('error');
      $('#span_descripcion_A').addClass('error_span');
      $('#span_mensaje_descripcion_A').html('Ingrese descripcion');
      var animate_in = 'lightSpeedIn', animate_out = 'bounceOut';
      new PNotify({title: 'Alerta',text: 'Por favor! ingrese descripcion',
        type: 'error',delay: 2500,
        animate: {animate: true,in_class: animate_in,out_class: animate_out}
      });
    }else{
      actualizar_tipo_mantenimiento();
    }
  });
// Fin de Actualizar Tipo de Manteniminento

// Función para cargar los datos para editar
function cargar_datos(id){
  var route="/tipo_mantenimiento/"+id+"/edit";  
  $.get(route,function(res){
    $("#IdTipoMantenimiento").val(res.id)
    $("#tipo_mantenimiento_A").val(res.tipo_mantenimiento);
    $("#descripcion_A").val(res.descripcion);
  });
}
// Fin de la función para cargar los datos para editar

// Función para actualizar el tipo de mantenimiento
function actualizar_tipo_mantenimiento(){
  var id=$("#IdTipoMantenimiento").val();
  var tipo_mantenimiento=$("#tipo_mantenimiento_A").val();
  var descripcion=$("#descripcion_A").val();
  var route ="/tipo_mantenimiento/"+id+"";
  var token =$("#token").val();
  $.ajax({
    url: route,
    headers: {'X-CSRF-TOKEN': token},
    type: 'PUT',
    dataType:'json',
    data: {tipo_mantenimiento:tipo_mantenimiento,descripcion:descripcion},
    success:function(res){
      if(res.sms=='ok'){
        $('#myModal_ModificarTipoMantenimiento').modal('hide');
        swal("Tipo de Mantenimiento Actualizado Correctamente..!", "", "success");
        $("#datatable").load("/lista_tipo_mantenimiento");
      }else{
        swal("Error al Actualizar el tipo de Mantenimiento..!", "", "success");
      }
    }
  });
}
// Fin de la función para actualizar el tipo de mantenimiento

// Función para eliminar un tipo de mantenimiento
function EliminarTipoMantenimiento(id){
  swal({
    title: "¿Deseas Elimar el ripo de Mantenimiento?",
    text: "",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "¡Eliminar!",
    cancelButtonText: "No! Cancelar", 
    closeOnConfirm: false,
    closeOnCancel: false 
  },
  function(isConfirm){
    if (isConfirm){
      var route="/tipo_mantenimiento/"+id+"";
      var token=$("#token").val();
        $.ajax({
          url: route,
          headers :{'X-CSRF-TOKEN': token},
          type: 'delete',
          dataType:'json',
          success:function(res){
            if(res.sms=='ok'){
              swal("¡Hecho!","Tipo de Mantenimiento Eliminado Correctamente","success");
              $("#datatable").load("/lista_tipo_mantenimiento");
            }          
          }
        });
    }else { 
      swal("¡Error !","No se pudo Eliminar el tipo de mantenimiento","error"); 
    } 
  }); 
}
// Fin función para eliminar un tipo de mantenimiento