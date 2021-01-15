<?php
require 'session.php';

require '../../conn.php';
require '../../modelos/User.php';

$login = new User;
$user = $login->recuperarUsuario($_POST['user']);

if ($user->email == $_POST['user'] && $user->password == $_POST['password']) {
    $_SESSION['auth'] = true;
    $_SESSION['id'] = $user->id_user;
    $_SESSION["timeout"] = time();
    
    header('location: /TP2-Turismo/index.php');

    } else {

    $_SESSION['message'] = [
        'type' => 'danger',
        'text' => 'El usuario o la contraseña son incorrectos'
    ];
    header('location: /TP2-Turismo/login.php');
} 


