<?php
require __DIR__. '/../User/session.php';

if(!isset($_SESSION['auth']) || !$_SESSION['auth']){

    header('location: /TP2-Turismo/login.php');
}

require __DIR__ . '/../../conn.php';
require __DIR__ . '/../../modelos/Hotel.php';
require __DIR__. '/../../../../header.php';


$hotel = new Hotel;
$hoteles= $hotel->getAll();   
$total = $hotel->getAllCount();
$cuantos = 6;
$botones = ceil($total / $cuantos);


require __DIR__ . '/../../../views/Hotel/ABMHotel.php';

?>
