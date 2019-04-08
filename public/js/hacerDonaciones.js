// //SHOW MODAL
// $('#submit').click(function(){
//     $('#modal1').modal();
//   });

  $(document).ready(function() {
    $('#modalBuscar').appendTo("body");
    $('#modalNuevo').appendTo("body");
    //GET TIPOS Y SUBTIPOS AJAX
    $('#tipo').on('change', function() {
      $.ajax({
        url: "http://localhost:8080/DB/public/api/tipo/" + this.value,
        type: "GET",
        data: {} ,
        dataType: "html",
        success: function(data){
          var $select = $('#subtipo');
          var miarray = JSON.parse(data);
               $("#subtipo option").remove();
                miarray.data.subtipos.forEach(function(subtipo) {
                $select.append('<option value=' + subtipo.id + '>' + subtipo.nombre + '</option>');
                });
             }
           });

      });
      //ESCONDER OPCION DE BUSCAR Y NUEVO DONANTE AL SER DONANTE ANONIMO (NO SE NECESITA)
      $('input[type=radio][name=anonimo]').change(function(){
        var valor = this.value;
        if(valor==1)
        {
            $('#donante').hide();
        }
        else {
            $('#donante').show();
        }

      });

      //ESCONDER OPCION AÑADIR FACTURA CUANDO RADIOBUTTON ES "NO"

      $('input[type=radio][name=hay_factura]').change(function(){
          var valorFactura = this.value;
          if(valorFactura == 2)
          {
              $('#AddFactura').hide();
          }
          else
          {
            $('#AddFactura').show();
          }
      });


      //AJAX BUSQUEDA DEL DONANTE EN MODAL Y INTRODUCCIÓN A LA TABLA
      $('#btnBusDonante').click(function ()
      {
       var mibusqueda =  $('#busquedadonante').val();
       if(!mibusqueda=='')
           {
       $.ajax({
        url: "http://localhost:8080/DB/public/api/donante/" + mibusqueda,
        type: "GET",
        data: {} ,
        dataType: "html",
        success: function(data){
          $('#tbody-donantes').children().remove();
         var $mitabla = $('#tabla-donantes');
         var datos = "";
              var resultadobusqueda = JSON.parse(data);
                  resultadobusqueda.data.forEach(function (donante)
                  {
                    datos = datos+ '<tr><td>'+ donante.nombre+'</td><td>'+donante.cif+'</td><td>'+donante.telefono+'</td><td>'+ donante.correo+ '</td>'
                    + '<td>'+'<button '+'id="seleccion" '+'data-id="'+donante.id+'" '+ 'data-nombre="'+donante.nombre+ '" ' + 'type="button" '+ 'class="btn btn-primary">'+'Seleccionar'+ '</button>'+'</td></tr>';
                  });
                  $mitabla.append(datos);
                            }
                  });
           }
      });
      //LIMPIAR AL CERRAR EL MODAL
      $('#modalBuscar').on('hidden.bs.modal', function () {
        $('input[name=buscDonante]').val('');
        $('#tbody-donantes').children().remove();
      });
      $(document).on('click','#seleccion',function(){
        var id =  $(this).data('id');
        var nombre = $(this).data('nombre');

        $('input[name=donante]').val(nombre);
        $('input[name=donantes_id]').val(id);
        $('#modalBuscar').modal('hide');

      });

  });


