$('#submit').click(function(){
    $('#modal1').modal();
  });


  $(document).ready(function() {
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
         
      });


  });
