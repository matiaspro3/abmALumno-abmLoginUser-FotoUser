  <?php 
 session_start(); 
 ?>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/ingreso.css" rel="stylesheet">

 
    <?php 
     
      if (!isset($_SESSION['usuariolala']))
      {
          if(isset($_COOKIE["registro"]))
          {
                $zarlanga = json_decode($_COOKIE["registro"]);


          }

     ?>
    <div id="formLogin" class="container" >

      <form  class="form-ingreso " onsubmit="validarLogin();return false";>
        <h2 class="form-ingreso-heading">Ingrese sus datos</h2>
        <label for="correo" class="sr-only">Correo electrónico</label>

                <input type="email" id="correo" class="form-control" placeholder="Correo electrónico" required="" autofocus="" value="<?php  if(isset($_COOKIE["registro"])){echo $zarlanga->email;}?>">

        <label for="clave" class="sr-only">Clave</label>
        
        <input type="password" id="clave" minlength="4" class="form-control" placeholder="clave" required="" value="<?php  if(isset($_COOKIE["registro"])){echo $zarlanga->pass;}?>">

        <div class="checkbox">
          <label>
            <input type="checkbox" id="recordarme" checked> Recordame
          </label>
          
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
      <p></p>
      <p></p>
      </form>



    </div> <!-- /container -->

 <?php 
}
else // echo "<h2> Ya estas Logueado </h2>" ;
{
?> 
<?php 
/*
    mover abajo
<button class="btn btn-lg btn-danger btn-block" onclick="MostrarPerfil()">Mi Perfil</button> 
*/
?>
  <button class="btn btn-lg btn-danger btn-block" onclick="deslogear()">Salir</button>

     <div id="miperfil" style="display: none;    ">
<?php  

}

  ?>
    
  
