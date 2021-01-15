<?php
    require __DIR__. '/../User/session.php';
    require __DIR__ . '/../../conn.php';
    require __DIR__ . '/../../modelos/Hotel.php';

    $delete = new Hotel;
    $delete->eliminar($_GET["id_hotel"]);


	$_SESSION['message'] = [
        'type' => 'success',
        'text' => 'Se ha eliminado el Hotel con exito!'
    ];
   
   
    header('location: ABMHotel.controller.php');