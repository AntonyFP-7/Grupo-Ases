<?php

  function validarCampo($campo){
    $campo=str_replace(array('á','à','â','å','ä','Á','À','Â','Å','Ã','Ä'),
                       array('a','a','a','a','a','A','A','A','A','A','A'),
                      $campo);
    $campo=str_replace(array('é','è','ê','ë','É','È','Ê','Ë'),
                       array('e','e','e','e','E','E','E','E'),
                       $campo); 
    $campo=str_replace(array('í','ï','î','ì','Í','Î','Ï','Ì'),
                       array('i','i','i','i','I','I','I','I'),
                       $campo);
    $campo=str_replace(array('ó','ò','ö','ô','õ','Ó','Ö','Ô','Ò','Õ'),
                       array('o','o','o','o','o','O','O','O','O','O'),
                       $campo);  
    $campo=str_replace(array('ú','ü','û','ù','Ú','Ü','Û','Ù'),
                       array('u','u','u','u','U','U','U','U'),
                       $campo); 
    $campo=str_replace(array('ñ','Ñ','ç','Ç'),
                       array('n','N','c','C'),
                       $campo); 
    $campo=str_replace(array('´','`'),
                       '',
                       $campo);
    $campo=trim($campo);
    $campo=stripcslashes($campo);
    $campo=htmlspecialchars($campo);
    return $campo;
  }

  if(isset($_POST["enviar"])){
   if(isset($_POST["nombre"]) && !empty($_POST["nombre"]) &&
   isset($_POST["celular"]) && !empty($_POST["celular"]) &&
   isset($_POST["especialidad"]) && !empty($_POST["especialidad"]) &&
   isset($_POST["region"]) && !empty($_POST["region"]) && 
     isset($_POST["email"]) && !empty($_POST["email"]) &&
     isset($_POST["mensaje"]) && !empty($_POST["mensaje"])
   ){
      $destinatario="brayanchiroquepaz42@gmail.com";
      $nombre=validarCampo($_POST["nombre"]);
      $celular=validarCampo($_POST["celular"]);
      $especilidad=validarCampo($_POST["especialidad"]);
      $region=validarCampo($_POST["region"]);
      $email=validarCampo($_POST["email"]);
      $mensaje=validarCampo($_POST["mensaje"]);
      $asunto="Informacion desde la pagina";
      
      $header = 'From: www.grupoases.pe' . "\r\n" .
    'Reply-To: brayanchiroquepaz42@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
       $mensajeCompleto="Nombre: ".$nombre . "\nEmail: ".$email."\nCelular: ".$celular."\nEspecialidad: ".$especilidad."\nRegion: ".$region ."\nMensaje: ".$mensaje;
       mail($destinatario,$asunto,$mensajeCompleto,$header);
      
      
      }   
       header("Location: ../pestanas/contac.php");
   } 
  
?>