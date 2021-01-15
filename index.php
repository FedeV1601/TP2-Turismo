
    <?php session_start();
      require('header.php'); ?> 
       <div class="container">
          <button type="button" class="btn btn-dark btn-lg">
                  <i class="fas fa-arrow-circle-left"></i>
                  <a class="volver" href="<?=$_SERVER["HTTP_REFERER"]?>">Volver</a>
          </button>
              <div class="row mt-2">
                <div class="col-12">
                  <div class="fondoTest">
                    <h1 class="titulo text-center pt-5 ">Bienvenido!</h1>
                  </div>
                </div>
              </div>
            </div>
        <?php require('footer.php'); ?> 
