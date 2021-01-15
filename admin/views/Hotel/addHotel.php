<?php session_start();
    if(!isset($_SESSION['auth']) || !$_SESSION['auth']){
        header('location: /TP2-Turismo/login.php');
    }
require __DIR__ . '/../../../header.php';?>

    <div class="container py-3">
    <?php require __DIR__ .'/../../php/message/message.php';?>
        <button type="button" class="btn btn-dark btn-lg my-3">
            <i class="fas fa-arrow-circle-left"></i> 
            <a class="volver" href="<?=$_SERVER["HTTP_REFERER"]?>">Volver</a>
        </button>
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form action="/TP2-Turismo/admin/php/controllers/Hotel/addHotel.controller.php" method="POST" enctype="multipart/form-data" >
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese un nombre">
                    </div>
                    <div class="form-group">
                        <label for="direccion">Direccion</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese la direccion">
                    </div>
                 
                    <div class="form-group">
                        <label for="categoria">Categoria</label>
                            <select class="form-control" name="categoria" id="categoria" placeholder="Ingrese la categoria">
                                <option selected>Seleccione Orden</option>
                                <option value="*">1 Estrella</option>
                                <option value="**">2 Estrellas</option>
                                <option value="***">3 Estrellas</option>
                                <option value="****">4 Estrellas</option>
                                <option value="*****">5 Estrellas</option>
                            </select>
                    </div> 
                    <div class="form-group">
                             <label for="id_ciudad">Ciudad</label>
                                <select class="form-control" id="id_ciudad" name="id_ciudad">
                                        <?php foreach($ciudades as $c):?>
                                                <option value="<?php echo $c->id_ciudad ?>"><?php echo $c->nombre ?></option>                                    
                                        <?php endforeach;?>
                                </select>
                    </div> 
                    <div class="form-group">
                        <label for="userfile">Imagen</label>
                        <input type="file" class="form-control" id="userfile" name="userfile">
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripcion</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->
    <?php require __DIR__ .'/../../../footer.php';?>