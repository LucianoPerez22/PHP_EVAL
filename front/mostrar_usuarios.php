<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trabajo Final</title>

   <?php require './lib/listar/listar_head.php' ?>
   
</head>
<body>
  <div class="container" >
    <div class="card text-center flex-fill shadow rounded p-3" id="principal">

      <div class="card-header small">
        Trabajo Final - Programador Web PHP MySql
      </div>

      <div class="card-body mt-4">
        <h5 class="card-title">ADMINISTRACION DE USUARIOS</h5>
        
        <br>
        <!-- Tabla -->
        <div class="table-area my-custom-scrollbar table-responsive">
          <table class="responsive-table table" id="dtVerticalScrollExample" cellspacing="0" width="100%">
            <thead class="" style="position: sticky;top: 0">
              <tr>
                <th header>Usuario</th>
                <th>Clave</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>E-mail</th>
                <th>Sitio Web</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody id="tabla">
              
            </tbody>
          </table>
        </div>

          <script> listar();</script>
          
      <br><br>
        <a href="../index.php" class="btn btn-danger">Volver</a>
       </div>
  <div class="card-footer text-muted small">
    Luciano David Perez
  </div>
</div>

  <?php require './lib/listar/listar_modal.php'; ?>

</div>

</body>
</html>

