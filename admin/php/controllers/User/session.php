<?php
session_start();
$inactividad = 1800;
    // Comprobar si $_SESSION["timeout"] está establecida
    if(isset($_SESSION["timeout"])){
        // Calcular el tiempo de vida de la sesión (TTL = Time To Live)
        $sessionTTL = time() - $_SESSION["timeout"];
        if($sessionTTL > $inactividad){
            
                      
              $_SESSION['message'] = [
                'type' => 'danger',
                'text' => 'Expiró su sesion. Debe Loguearse Nuevamente.'
            ]; 
            header("Refresh: 5; url=../../../../login.php");
         
            session_destroy();
          
        }
    }

    ?>