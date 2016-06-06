<?php 
session_start();//este metodo me habilita el acceso a variable super global (ej:$post)
require_once("../clases/Alumno.php");
require_once("../clases/User.php");
require_once("../clases/AccesoDatos.php");


$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
$recordar=$_POST['recordarme'];

$retorno;
/*
if($usuario=="admin@admin.com" && $clave=="admin")
{			
	
$_SESSION['usuariolala']="admin";


//$retorno= "ingreso";

$retorno= $_SESSION['usuariolala'];

}else
{
	$retorno= "No-esta";
}

echo $retorno;
 ;
*/

$fila=usuarios::ValidarUser($usuario,$clave);
////var_dump($fila);
if( $fila!= NULL)
{			
		//if (Alumno::Traer)
$_SESSION['usuariolala']=$fila->tipo;
$_SESSION['user']=$fila->email;
$_SESSION['userPass']=$fila->pass;
	//var_dump()

//$_SESSION['usuariolala']="admin";


if($recordar=="true")
	{
		setcookie("registro",json_encode($fila),  time()+3600 , '/');
		
	}else
	{
		setcookie("registro", "" ,  time()-3600 , '/');
		
	}





//$retorno= "ingreso";

$retorno= _SESSION['usuariolala'];

}else
{
	$retorno= "Usuario No Registrado";
}

echo $retorno;
 





?>