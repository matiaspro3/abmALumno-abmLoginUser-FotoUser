<?php 
session_start();
 ?>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/ingreso.css" rel="stylesheet">

    <div class="container">

      <form class="form-ingreso" onsubmit="GuardarUser();return false">
        <h2 class="form-ingreso-heading">Datos de usuario</h2>

        <label for="nombre" class="sr-only">Email de Usuario</label>
        <input type="text"  minlength="4"  id="email" title="Se necesita el user" class="form-control" placeholder="Email" required="" autofocus="">
        <label for="legajo" class="sr-only">Contraseña</label>
        <input type="text"  minlength="3"  id="pass" title="Se necesita el Pass"  class="form-control" placeholder="Contraseña" required="" autofocus="">
        <?php 
          if ($_SESSION['usuariolala']=="admin")
          {

         ?>
        <label for="sexo" class="sr-only">Tipo</label>
        <!--<input type="number"   min="1900" title="Solo M o F "  max="2099" id="anio" class="form-control" placeholder="Sexo" required="" autofocus="">-->
        <input type="text"   minlength="1" title="Solo M o F "  id="tipo" class="form-control" placeholder="Tipo" required="" autofocus="">

        <?php 
       }
        ?>

       <input readonly   type="hidden"    id="idalu" class="form-control" >
       
        <button  class="btn btn-lg btn-success btn-block" type="submit"><span class="glyphicon glyphicon-floppy-save">&nbsp;&nbsp;</span>Guardar </button>
     
      </form>

    </div> <!-- /container -->


    