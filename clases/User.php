<?php 

class usuarios{




	public $id;
 	public $email;
  	public $pass;
  	public $tipo;


public static function ValidarUser($nombre,$pass)
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso();  
			$consulta =$objetoAccesoDato->RetornarConsulta("select id,email,pass,tipo from user where email = '$nombre' and pass = '$pass'");
			$consulta->execute();			
			return $consulta->fetchObject('usuarios');	
	}



public static function TraerTodoLosUsuarios()
	{
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select id,email, pass,tipo from user");
			$consulta->execute();			
			return $consulta->fetchAll(PDO::FETCH_CLASS, "usuarios");		
	}




public function BorrarUser()
	 {
	 		$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				delete 
				from user 				
				WHERE id=:id");	
				$consulta->bindValue(':id',$this->id, PDO::PARAM_INT);		
				$consulta->execute();
				return $consulta->rowCount();
	 }

	
	public function ModificarUser()
	 {

			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				update user 
				set email='$this->email',
				pass='$this->pass',
				tipo='$this->tipo'
				WHERE id='$this->id'");
			return $consulta->execute();

	 }
	
	public function InsertarUser()
	 {
				$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
				$consulta =$objetoAccesoDato->RetornarConsulta("INSERT into user (email,pass,tipo)values(:email,:pass,:tipo)");
				$consulta->bindValue(':email',$this->email, PDO::PARAM_STR);
				$consulta->bindValue(':pass', $this->pass, PDO::PARAM_STR);
				$consulta->bindValue(':tipo', $this->tipo, PDO::PARAM_STR);
				$consulta->execute();		
				return $objetoAccesoDato->RetornarUltimoIdInsertado();
	 }



	 public function GuardarUser()
	 {

	 	if($this->id>0)
	 		{
	 			//$this->ModificarAlumnoParametros(); // no funciona con este metodo.
	 			$this->ModificarUser();
	 		}else {
	 			$this->InsertarUser();
	 		}

	 }
public static function TraerUnUser($id) 
	{			

			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select id,email, pass ,tipo from user where id = $id");
			$consulta->execute();
			$aluBuscado= $consulta->fetchObject('usuarios');

			return $aluBuscado;				

			
	}
public static function TraerFotoDeUser($id) 
	{			

			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("select foto from user where id = $id");
			$consulta->execute();
			$aluBuscado= $consulta->fetchObject('usuarios');

			return $aluBuscado;				

			
	}

	public static function GuardarFotoDeUser($id) 
	{			
			$objetoAccesoDato = AccesoDatos::dameUnObjetoAcceso(); 
			$consulta =$objetoAccesoDato->RetornarConsulta("
				update user 
				set foto ='$this->foto'
				WHERE id='$this->id'
				and email='$this->email'
				and pass='$this->pass'
				and tipo='$this->tipo'
			"

				);
			return $consulta->execute();	

			
	}





























}







 ?>