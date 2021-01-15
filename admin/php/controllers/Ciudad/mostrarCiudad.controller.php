<?php

require __DIR__ . '/../../conn.php';
require __DIR__ . '/../../modelos/Ciudad.php';


$ciudad = new Ciudad;
$ciudades= $ciudad->getAll();       
$total = $ciudad->getAllCount();
$cuantos = 6;
$botones = ceil($total / $cuantos);

require __DIR__ . '/../../../views/Ciudad/mostrarCiudades.php';

?>



