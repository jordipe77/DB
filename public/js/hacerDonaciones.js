$('#submit').click(function(){
    $('#modal1').modal();
  });


  $(document).ready(function() {
<<<<<<< HEAD
    $('#tipo').on('change', function() {
      var request = $.ajax({
        url: "http://localhost:8080/DB/public/api/tipo/" + this.value,
        type: "GET",
        data: {} ,
        dataType: "html",
        success: function(data){
          var $select = $('#subtipo');
          console.log(data);
          var miarray = JSON.parse(data);
          $("#subtipo option").remove();
          miarray.data.subtipos.forEach(function(subtipo, index) {
            $select.append('<option value=' + subtipo.id + '>' + subtipo.nombre + '</option>');
          });
       }
      });

=======
    tiposysubtipos();
    $('#modalBuscar').appendTo("body");
    $('#modalNuevo').appendTo("body");
    //GET TIPOS Y SUBTIPOS AJAX
    $('#tipo').on('change', function() {
        tiposysubtipos();
>>>>>>> master
      });


  });
$(document).ready(function()
{
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


<<<<<<< HEAD
});
=======
      });

  });
function tiposysubtipos()
{
        $.ajax({
          url: "http://localhost:8080/DB/public/api/tipo/" + $('#tipo').val(),
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
}
>>>>>>> master


