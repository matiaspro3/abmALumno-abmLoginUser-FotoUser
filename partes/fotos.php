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
 		else echo "El auto NOOO esta";

 ?>