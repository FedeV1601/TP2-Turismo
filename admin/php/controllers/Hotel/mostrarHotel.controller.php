<?php

require __DIR__ . '/../../conn.php';
require __DIR__ . '/../../modelos/Hotel.php'; 

$mostrar = new Hotel;
$hotel=$mostrar->find($_GET['id_hotel']);

require __DIR__ . '/../../../views/Hotel/mostrarHotel.php';
?>