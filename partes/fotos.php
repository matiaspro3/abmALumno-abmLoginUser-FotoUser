<script type="text/javascript" src="js/funcionesAjax.js"></script>
<script type="text/javascript" src="js/funcionesLogin.js"></script>
<script type="text/javascript" src="js/funcionesABM.js"></script>
<script type="text/javascript" src="js/funcionesUser.js"></script>
 <input type="file" name ="foto	">	

 				<b>    </b>
 			<a onclick="MostarLogin()"    class="btn btn-info" id="guardarFoto" >Aceptar</a> </li>
<?php 









/*
 <input type="file" name ="fotoAutito">
    <input type="file" name="foto" id="foto" onchange="subirFoto()"><br>

<?php 











<?php 
$accion=$_POST['estacionar'];
$patente=$_POST['patente'];
$ahora=date("y-m-d h:i:s");
$listaDeAutos=array();
$listaAx=array();

//var_dump($accion);
if($accion=="ingreso")
{
	echo "Se guardo la patente $patente";

	$archivo_ext=$_FILES['fotoAutito']['name'];


	$archivo_ext2=explode(".", $archivo_ext);


	$archivo_destino2="Fotitos/".$patente.".".$archivo_ext2[1];
	

	move_uploaded_file($_FILES['fotoAutito']['tmp_name'], $archivo_destino2);

	$archivo=fopen("ticket.txt", "a");
	fwrite($archivo, $patente."@@@@".$ahora."@@@@".$archivo_destino2."\n");
	fclose($archivo);

}
else
{
 	$archivo=fopen("ticket.txt", "r");
 	while (!feof($archivo)) {
 		$renglon=fgets($archivo);
 		$auto=explode("@@@@", $renglon);
 		if ($auto[0]!="")
 				$listaDeAutos[]=$auto;

 	}
 	//var_dump($listaDeAutos);
 	fclose($archivo);
 	$esta=false;
 	foreach ($listaDeAutos as $auto) {
 		//echo $auto[0]."<br>";
 		//echo $auto[1]."<br>";
 		if ($auto[0] ==$patente)
 		{
 			$esta =true;
 			$fechainicio=$auto[1];
 			$diferencia=strtotime($ahora)-strtotime($fechainicio); //funcion que convierte el datetime en string
			echo "el tiempo trasncurrido es $diferencia <br>";
			//precio

 		}
 		else
 		{
 			if ($auto[0]!="") {
 				$listaAx[]=$auto;
 			}
 		}

 	}
//var_dump($listaAx[0]);
 	if ($esta)
 		{	

 			echo "El auto esta";

 			$archivo=fopen("ticket.txt", "w");
 			foreach ($listaAx as $auto) {
 				fwrite($archivo, $auto[0]."@@@@".$auto[1]."@@@@".$archivo_destino2."\n");
				

 			}	fclose($archivo);




		}
 		else echo "El auto NOOO esta
// crea la tabla

$archivo=fopen("ticket.txt", "r");
echo "<table border=1>";
echo "<TH> Patente </TH><TH> Fecha </TH><TH> Foto </TH>";	//th =columnas ..tr=filas...td=datos
while (!feof($archivo)) {
 		$renglon=fgets($archivo);
 		$auto=explode("@@@@", $renglon);
 		if ($auto[0]!="")
 		{
 			echo "<tr>";
 			echo "<tr>"."<td>".$auto[0]."</td><td>".$auto[1]."</td><td><img src=".$auto[2]."height=50 width=50</img></td></tr>";
 			echo "</tr>";



 		}
 	}
 	fclose($archivo);
echo "</table>"

 ?>
*/
 ?>