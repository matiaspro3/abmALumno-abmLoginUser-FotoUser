
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/ingreso.css" rel="stylesheet">

    <div class="container">

      <form class="form-ingreso" onsubmit="GuardarAlumno();return false">
        <h2 class="form-ingreso-heading">Datos del Alumno</h2>

        <label for="nombre" class="sr-only">Nombre</label>
        <input type="text"  minlength="4"  id="nombre" title="Se necesita un nombre de Alumno" class="form-control" placeholder="Nombre" required="" autofocus="">
        <label for="legajo" class="sr-only">Legajo</label>
        <input type="text"  minlength="3"  id="legajo" title="Se necesita el legajo del Alumno"  class="form-control" placeholder="Legajo" required="" autofocus="">
        <label for="sexo" class="sr-only">Sexo</label>
        <!--<input type="number"   min="1900" title="Solo M o F "  max="2099" id="anio" class="form-control" placeholder="Sexo" required="" autofocus="">-->
        <input type="text"   minlength="1" title="Solo M o F "  id="sexo" class="form-control" placeholder="Sexo" required="" autofocus="">
       
       <input readonly   type="hidden"    id="idalu" class="form-control" >
       
        <button  class="btn btn-lg btn-success btn-block" type="submit"><span class="glyphicon glyphicon-floppy-save">&nbsp;&nbsp;</span>Guardar </button>
     
      </form>

    </div> <!-- /container -->


    
  
