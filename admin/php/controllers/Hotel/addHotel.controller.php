<?php
    require __DIR__. '/../User/session.php';
    require __DIR__ . '/../../conn.php';
    require __DIR__ . '/../../modelos/Hotel.php';
    require __DIR__ . '/../../modelos/Ciudad.php';

   
    if(empty($_POST["nombre"])){
        $errores[] = "El nombre es requerido";
    }
    if(empty($_POST["direccion"])){
        $errores[] = "La direccion es requerida";
    }
    if(empty($_POST["categoria"])){
        $errores[] = "La categoria es requerida";
    }
    if(empty($_POST["id_ciudad"])){
        $errores[] = "La ciudad es requerida";
    }
    if(empty($_FILES["userfile"]["name"])){
        $errores[] = "La imagen es requerida";
    }

    if(isset($errores)){

          $_SESSION['message'] = [
            'type' => 'danger',
            'text' => 'Debe Ingresar TODOS los datos del Hotel.'
        ];
        header('location: ABMHotel.controller.php');
    }else{
   
        $nombre_archivo = $_FILES['userfile']['name'];
        $tipo_archivo = $_FILES['userfile']['type'];
        $tamano_archivo = $_FILES['userfile']['size'];
        
        $nombre_archivo= uniqid().'.'.pathinfo($_FILES['userfile']['name'], PATHINFO_EXTENSION);
        $destino = __DIR__ . "/../../../../img/hoteles/".$nombre_archivo;
        
        if (!(($_FILES['userfile']['type'] == "application/msword" ||  strpos($tipo_archivo, "jpeg") || strpos($tipo_archivo, "png")) && ($tamano_archivo < 500000))) {

            $_SESSION['message'] = [
               'type' => 'danger',
               'text' => 'El tamaño o el  tipo de archivo es incorrecto'
           ];
        }elseif(move_uploaded_file($_FILES['userfile']['tmp_name'],  $destino)){// move_uploaded_file se utiliza para mover el archivo a la posición definitiva
            
            $add = new Hotel;
            $add->agregar($_POST["nombre"], $_POST["direccion"], $_POST["categoria"], $nombre_archivo, $_POST["id_ciudad"], $_POST["descripcion"]);
    
                $_SESSION['message'] = [
                           'type' => 'success',
                           'text' => 'Se ha agregado un Hotel con exito!'
                       ];
        }else{
                       
                       $_SESSION['message'] = [
                           'type' => 'danger',
                           'text' => 'Ocurrió algún error al subir el fichero. No pudo guardarse.'
                       ];
        }
    }

   header('location: ABMHotel.controller.php');