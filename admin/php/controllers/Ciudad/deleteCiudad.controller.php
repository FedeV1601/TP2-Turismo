<?php
    require __DIR__. '/../User/session.php';
    require __DIR__ . '/../../conn.php';
    require __DIR__ . '/../../modelos/Ciudad.php';

    $delete = new Ciudad;
    $eliminacionExitosa= $delete->eliminar($_GET["id_ciudad"]);
  
    if($eliminacionExitosa!=0){
        
        $_SESSION['message'] = [
            'type' => 'success',
            'text' => 'Se ha eliminado la Ciudad con exito!'
        ];
    }else{
        $_SESSION['message'] = [
            'type' => 'danger',
            'text' => 'No se ha podido eliminar la Ciudad. Debe primero eliminar los hoteles que estan en ella.'
        ];

    }


    header('location: ABMCiudad.controller.php');

