$(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;
  
      var winTop = $(window).scrollTop();
      if (pos < winTop + 600) {
        $(this).addClass("slide");
      }
    });
  });

$('[data-toggle="tooltip"]').tooltip();

$(document).ready(function(){

  // $("#alerta-nombre").alert('close')
  // $("#alerta-correo").alert('close')
  // $("#alerta-mensaje").alert('close')
  // $("#alerta-exito").alert('close')
  
 
  $("#enviar").click(function(){
    let nombre=$("#nombre").val();
    let celular=$("#celular").val();
    let especialidad=$("#especialidad").val();
    let region=$("#region").val();
    let correo=$("#email").val();
    let mensaje=$("#mensaje").val();
    
    let nombre1=document.getElementById("nombre")
    let celular1=document.getElementById("celular")
    let especialidad1=document.getElementById("especialidad")
    let region1=document.getElementById("region")
    let correo1=document.getElementById("email")
let mensaje1=document.getElementById("mensaje")
    if(nombre == ""){
      $("#alerta-nombre").removeClass("hide") 
      nombre1.addEventListener("focusout",function(){
        if(nombre1.value.length>0){
          $("#alerta-nombre").addClass("hide")

        }
      })
      
     return false;
    } else{
        $("#alerta-nombre").addClass("hide")
        if(celular=="" || (isNaN(celular))){
            $("#alerta-celular").removeClass("hide")
            celular1.addEventListener("focusout",function(){
             if(celular1.value.length>0 && !(isNaN(celular1.value)) && celular1.value.length<10){
               $("#alerta-celular").addClass("hide")
             }
            });
            return false;
        }else{
          $("#alerta-celular").addClass("hide")
          if(especialidad==""){
            $("#alerta-especialidad").removeClass("hide")
            especialidad1.addEventListener("focusout",function(){
               if(especialidad1.value.length>0){
                 $("#alerta-especialidad").addClass("hide")
               }
            });
            return false;
          }else{
            $("#alerta-especialidad").addClass("hide")
            if(region==""){
              $("#alerta-region").removeClass("hide")
              region1.addEventListener("focusout",function(){
                if(region1.value.length>0){
                  $("#alerta-region").addClass("hide")
                }
              })
              return false;
            }else{

      $("#alerta-region").addClass("hide")
      if(correo==""){
        $("#alerta-correo").removeClass("hide")
        correo1.addEventListener("focusout",function(){
          if(correo1.value.length>0){
            $("#alerta-correo").addClass("hide")
  
          }
        })
          return false;
      }else{
        $("#alerta-correo").addClass("hide")
        if(mensaje==""){
          $("#alerta-mensaje").removeClass("hide")
          mensaje1.addEventListener("focusout",function(){
            if(mensaje1.value.length>0){
              $("#alerta-mensaje").addClass("hide")
    
            }
          })
          return false
        }
      } 
      }
    }
    }
  }
  })

})


