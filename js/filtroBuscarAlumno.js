function changeFilter(filter){
         $.ajax({
          url:'../../services/filter_form1_service.php',
          type:'POST',
          dataType:'JSON',
          data:{
            'filter':filter,
            
          },
  
        }).then(function(datos){
            document.getElementById('filter_response').innerHTML=datos
            document.getElementById('submit').hidden=false
            document.getElementById('submit').value=filter
         })    
        
}
function findStudents(){
    $.ajax({
     url:'../../services/alumnos_service.php',
     type:'POST',
     dataType:'JSON',
     data:{
       'filter':$('#submit').val(),
       'search':$('#search').val()
     },

   }).then(function(datos){
       document.getElementById('response').innerHTML=datos
       
    })    
   
}