<?php
require __DIR__. '/admin/php/controllers/User/session.php';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turismo Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
   
    <style>
        body::before {
            content: "";
            position: absolute;
            top: 0; left: 0;
            width: 100%; height: 100%;
        }
    </style>
</head>

<body>
    <div class="container">
           <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                  <a class="navbar-brand" href="/TP2-Turismo/index.php">Turismo TP</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                                <?php if(!isset($_SESSION['auth']) || !$_SESSION['auth'] ): ?>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="/TP2-Turismo/admin/php/controllers/Ciudad/mostrarCiudad.controller.php">Navegar el Sitio <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/TP2-Turismo/admin/php/controllers/Ciudad/ABMCiudad.controller.php"> Editar Ciudades</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/TP2-Turismo/admin/php/controllers/Hotel/ABMHotel.controller.php">Editar Hoteles</a>
                                    </li>
                                <?php else:?>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="/TP2-Turismo/admin/php/controllers/Ciudad/mostrarCiudad.controller.php">Navegar el Sitio <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/TP2-Turismo/admin/php/controllers/Ciudad/ABMCiudad.controller.php"> Editar Ciudades</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/TP2-Turismo/admin/php/controllers/Hotel/ABMHotel.controller.php">Editar Hoteles</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/TP2-Turismo/logout.php">Logout</a>
                                    </li>
                                <?php endif;?>
                        </ul>
                  </div>
                </nav>
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
    <div class="container fondo">
        <div class="row justify-content-center">
            <div class="col col-md-6 my-5">
                <div class="text-center mt-5">
                    <img src="img/portada/turismo.png" width="300" height="150" alt="Turismo Login">
                </div>
                <div class="card my-3">
                    <h5 class="card-header">Login</h5>
                        <div class="card-body">
                             <?php require ('admin/php/message/message.php');?>
                                    <form method="POST" action="/TP2-Turismo/admin/php/controllers/User/loginController.php">
                                        <div class="form-group">
                                            <label for="user">Email</label>
                                            <input type="email" class="form-control" id="user" name="user" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Contraseña</label>
                                            <input type="password" class="form-control" id="password" name="password" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </form>
                        </div>
                </div>
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
        <?php require('footer.php'); ?> 
