<?php
class alumno
{
	public $id;
 	public $nombre;
  	public $legajo;
  	public $sexo;


	

  	public function BorrarAlumno()
	 {
	 		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				delete 
				from alumno 				
				WHERE id=:id");	
				$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);		
				$consulta->execute();
				return $consulta->rowCount();
	 }

	
	public function ModificarAlumno()
	 {

			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				update alumno 
				set nombre='$this->nombre',
				legajo='$this->legajo',
				sexo='$this->sexo'
				WHERE id='$this->id'");
			return $consulta->execute();

	 }
	
  
	 public function InsertarAlumno()
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into alumno (nombre,legajo,sexo)values('$this->nombre','$this->legajo','$this->sexo')");
				$consulta->execute();
				return $objetoAccesoDato->RetornarUltimoIdInsertado();
				

	 }

	
	 public function GuardarAlumno()
	 {

	 	if($this->id>0)
	 		{
	 			//$this->ModificarAlumnoParametros(); // no funciona con este metodo.
	 			$this->ModificarAlumno();
	 		}else {
	 			$this->InsertarElAlumnoParametros();
	 		}

	 }


  	public static function TraerTodoLosAlumnos()
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select id,nombre, legajo,sexo from alumno");
			$consulta->execute();			
			return $consulta->fetchAll(PDO::FETCH_CLASS, "Alumno");		
	}

	public static function TraerUnAlumno($id) 
	{			

			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select id,nombre as nombre, legajo as legajo ,sexo as sexo from alumno where id = $id");
			$consulta->execute();
			$aluBuscado= $consulta->fetchObject('Alumno');

			return $aluBuscado;				

			
	}
	public function InsertarElAlumnoParametros()
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into alumno (nombre,legajo,sexo)values(:nombre,:legajo,:sexo)");
				$consulta->bindValue(':nombre',$this->nombre, PDO::PARAM_STR);
				$consulta->bindValue(':legajo', $this->legajo, PDO::PARAM_STR);
				$consulta->bindValue(':sexo', $this->sexo, PDO::PARAM_STR);
				$consulta->execute();		
				return $objetoAccesoDato->RetornarUltimoIdInsertado();
	 }

	  public function ModificarAlumnoParametros()
	 {				
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				update alumno 
				set nombre=:nombre,
				legajo=:legajo,
				sexo=:sexo
				WHERE id=:id");
			$consulta->bindValue(':nombre',$this->nombre, PDO::PARAM_STR);
			$consulta->bindValue(':legajo', $this->legajo, PDO::PARAM_STR);
			$consulta->bindValue(':sexo', $this->sexo, PDO::PARAM_STR);
			return $consulta->execute();
	 }

	 

	public function mostrarDatos()
	{
	  	return "Metodo mostar:".$this->titulo."  ".$this->cantante."  ".$this->año;
	}

}