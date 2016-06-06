<?php 
session_start(); //siosi siempre va primero.

if (isset($_SESSION['usuariolala']))   //pregunto si esta logueado(no importa quien)
{
	require_once("clases/AccesoDatos.php");
	require_once("clases/cd.php");
	require_once("clases/Alumno.php");

	$arrayDeCds=cd::TraerTodoLosCds();
	$arrayDeAlum=Alumno::TraerTodoLosAlumnos();
 //}  // la saco de aca sino da error cuando no logueo
 ?>
<?php /*
<table class="table"  style=" background-color: beige;">
	<thead>
		<tr>
			<th>Editar</th><th>Borrar</th><th>cantante</th><th>disco</th><th>año</th>
		</tr>
	</thead>
	<tbody>

		<?php 

foreach ($arrayDeCds as $cd) {
	echo"<tr>
			<td><a onclick='EditarCD($cd->id)' class='btn btn-warning'> <span class='glyphicon glyphicon-pencil'>&nbsp;</span>Editar</a></td>
			<td><a onclick='BorrarCD($cd->id)' class='btn btn-danger'>   <span class='glyphicon glyphicon-trash'>&nbsp;</span>  Borrar</a></td>
			<td>$cd->cantante</td>
			<td>$cd->titulo</td>
			<td>$cd->año</td>
		</tr>   ";
}
		 ?>
	</tbody>
</table>
*/
		 ?>
<table class="table"  style=" background-color: transparent;">
	<thead>
		<tr>
			<th>Editar</th><th>Borrar</th><th>Nombre</th><th>Legajo</th><th>Sexo</th>
		</tr>
	</thead>
	<tbody>
												
		<?php 

if ($_SESSION['usuariolala']=="admin"){
	    ?>

		<a onclick="Alta()" class="btn btn-info">Alta de Alumno</a>   <?php  //class="btn btn-success    verde ?>
		   <?php 

foreach ($arrayDeAlum as $alum) {

	echo"<tr>
			<td><a onclick='MostrarAlumno($alum->id)' class='btn btn-warning'> <span class='glyphicon glyphicon-pencil'>&nbsp;</span>Editar</a></td>
			<td><a onclick='BorrarAlumno($alum->id)' class='btn btn-danger'>   <span class='glyphicon glyphicon-trash'>&nbsp;</span>  Borrar</a></td>
			<td>$alum->nombre</td>
			<td>$alum->legajo</td>
			<td>$alum->sexo</td>
		</tr>   ";
								}
									}
else {
if ($_SESSION['usuariolala']=="otro"){
foreach ($arrayDeAlum as $alum) {
	echo"<tr>
			<td><a onclick='' disabled='disabled' class='btn btn-warning' >   <span class='glyphicon glyphicon-pencil'>&nbsp;</span>Editar</a></td>
			<td><a onclick='' disabled='disabled' class='btn btn-danger'>   <span class='glyphicon glyphicon-trash'>&nbsp;</span>  Borrar</a></td>
			<td>$alum->nombre</td>
			<td>$alum->legajo</td>
			<td>$alum->sexo</td>
		</tr>   ";
							}
									}
	}

		   ?>
	</tbody>
</table>






		 
	</tbody>
</table>

 





<?php 
// sin login 
} 
else echo "<font color ='yellow'><h1> Debe iniciar sesion para poder ver la tabla </h1> ";

	 ?>