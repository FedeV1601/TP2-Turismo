<?php
require __DIR__. '/../User/session.php';
require __DIR__ . '/../../../../header.php';
require __DIR__ . '/../../conn.php';
require __DIR__ . '/../../modelos/Hotel.php';
require __DIR__ . '/../../modelos/Ciudad.php';

$edit = new Hotel;
$hotel = $edit->find($_GET['id_hotel']);

$categorias = array('1 Estrella','2 Estrellas','3 Estrellas','4 Estrellas','5 Estrellas');

$ciudad = new Ciudad;
$ciudades = $ciudad->all();

require __DIR__ . '/../../../views/Hotel/editHotel.php';

