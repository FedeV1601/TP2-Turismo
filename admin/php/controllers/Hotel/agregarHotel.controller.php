<?php

require __DIR__ . '/../../conn.php';
require __DIR__ . '/../../modelos/Hotel.php';
require __DIR__ . '/../../modelos/Ciudad.php';

$hotel = new Hotel;

$ciudad = new Ciudad;
$ciudades = $ciudad->all();

require __DIR__ . '/../../../views/Hotel/addHotel.php';