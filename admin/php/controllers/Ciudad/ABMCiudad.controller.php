<?php
require __DIR__. '/../User/session.php';


if(!isset($_SESSION['auth']) || !$_SESSION['auth']){

    header('location: /TP2-Turismo/login.php');
}

require __DIR__ . '/../../conn.php';
require __DIR__ . '/../../modelos/Ciudad.php';
require __DIR__. '/../../../../header.php';

$ciudad = new Ciudad;
$ciudades= $ciudad->getAll();       
$total = $ciudad->getAllCount();
$cuantos = 6;
$botones = ceil($total / $cuantos);



 require __DIR__ . '/../../../views/Ciudad/ABMCiudad.php';

?>
