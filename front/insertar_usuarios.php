<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabajo Final</title>

    <?php require './lib/agregar/agregar_head.php' ?>
</head>
<body>
<div class="container">
    <div class="card text-center  mt-5 shadow rounded p-3">
        <div class="card-header small">
            Trabajo Final - Programador Web PHP MySql
        </div>

        <div class="card-body">
            <h4 class="card-title"></h4>
        <div class="registration-form ">
            <form method="POST" action="../back/funciones.php?fun=1">
                <div class="form-icon">
                    <span><i class="icon icon-user-follow"></i></span>
                </div>
                <p class="text-center">NUEVO USUARIO</p>
                <?php
                    if (isset($_GET['error'])) {
                       echo "<p style='color:red'>Error: El nombre de usuario ya esta registrado!!!</p>";
                    }
                ?>
                <div class="form-group">
                    <input type="text" class="form-control item" placeholder="Usuario" name="usuario" required maxlength="30">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control item"  placeholder="Clave" name="clave" required maxlength="20">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control item" placeholder="Nombre" name="nombre" required maxlength="30">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control item" placeholder="Apellido" name="apellido" required maxlength="30">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control item"  placeholder="Edad" name="edad"  min="0" max="99">
                </div>

                <div class="form-group">
                    <input type="email" class="form-control item"  placeholder="E-mail" name="email" required>
                </div>

                <div class="form-group">
                    <input type="text" class="form-control item"  placeholder="Sitio Web" name="sitio_web">
                </div>
                <div class="form-group text-center">
                    <input type="submit" class="btn btn-primary create-account" value="Guardar">
                    <a href="../index.php">
                        <button type="button" class="btn btn-danger cancel-account">Cancelar</button> 

                    </a>
                    
                </div>
            </form>
        
        </div>
    </div>
     <div class="card-footer text-muted small">
            Luciano David Perez
          </div>
    </div>
</div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>