<?php

require __DIR__ . '/../../conn.php';
require __DIR__ . '/../../modelos/Hotel.php'; 


$hotel = new Hotel;
$cuantos = 6;

$hoteles= $hotel->searchVista($cuantos, $_GET["id_ciudad"]);

$total = $hotel->getAllCountVista();
$botones = ceil($total / $cuantos);

require __DIR__ . '/../../../views/Hotel/mostrarHoteles.php';
?>
