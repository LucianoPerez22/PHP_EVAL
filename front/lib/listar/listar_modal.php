<div class="modal-dialog ocultar" role="document" id="modal1">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLiveLabel"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Editar Usuario</font></font></h5>

          

        <button type="button" class="close" onclick="ocultar();" aria-label="Close">
          <span aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">×</font></font></span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="" id="formEditar">
                <div class="form-group">
                    <input type="text" class="form-control border" placeholder="Usuario" name="usuario" required maxlength="30" id="usuario">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control border"  placeholder="Clave" name="clave" required maxlength="20" id="clave">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control border" placeholder="Nombre" name="nombre" required maxlength="30" id="nombre">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control border" placeholder="Apellido" name="apellido" required maxlength="30" id="apellido">
                </div>
                <div class="form-group">
                    <input type="number" class="form-control border"  placeholder="Edad" name="edad"  min="0" max="99" id="edad">
                </div>

                <div class="form-group">
                    <input type="email" class="form-control border"  placeholder="E-mail" name="email" id="email">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control border"  placeholder="Sitio Web" name="sitio_web" id="sitio_web">
                </div>
               
            

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" onclick="ocultar();"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cerrar</font></font></button>
        <button type="button" class="btn btn-primary" onclick="editar();"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Guardar</font></font></button>
      </div>

      </form>
    </div>
</div>