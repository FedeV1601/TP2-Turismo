<?php
require __DIR__. '/../User/session.php';
require __DIR__ . '/../../../../header.php';
require __DIR__ . '/../../conn.php';
require __DIR__ . '/../../modelos/Ciudad.php';

$edit = new Ciudad;
$ciudad = $edit->find($_GET['id_ciudad']);

require __DIR__ . '/../../../views/Ciudad/editCiudad.php';
