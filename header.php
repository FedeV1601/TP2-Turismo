<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Animate -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- CSS de autor -->
    <link rel="stylesheet" href="/TP2-Turismo/css/estilos.css">
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">

    <title>TP Turismo</title>
  </head>
  <body class="fondoBody">
       <div class="container">
            <div class="text-center">
              <img src="/TP2-Turismo/img/portada/turismo.png" class="img-fluid" width="300" height="150" alt="Turismo Login">
            </div>
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
                          <?php else : ?>
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
            </div><!--col-->
          </div><!--row-->
        </div><!--container-->
      
