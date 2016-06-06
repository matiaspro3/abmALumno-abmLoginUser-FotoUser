function validarLogin()
{//	alert("hole");
		var usuarioAux;
		var pass;
		var recordarmeAux;


		usuarioAux=$("#correo").val(); //sin parametros (.val();)es getter. con parametros(.val(lalal);) es setter ...
		pass=$("#clave").val();
		recordarmeAux=$("#recordarme").is(':checked');	//  bool

	var funcionAjax = $.ajax( {   
				type:"post",
				url:"php/validarUsuario.php",
				data:{ usuario: usuarioAux,clave:pass,recordarme:recordarmeAux}	

								});



	funcionAjax.done(function (respuesta)  
	{		if (respuesta!="Usuario No Registrado"){
					//MostarLogin();
					MostrarInicio()
					MostrarPerfil();
				$("#BotonLogin").html("Cerrar Sesion");
			} else alert(respuesta);
		
		//	$("#usuario").val()= "pepito";
		//console.log("ola");
		//alert(respuesta);

	}  );


	funcionAjax.fail (function (respuesta)  
	{
		//console.log("ola");
		alert("fallo");


	}  );


	}




function deslogear()
{	
	var funcionAjax=$.ajax({
		url:"php/deslogearUsuario.php",
		type:"post"		
	});
	funcionAjax.done(function(retorno){
			//MostarBotones();
			MostarLogin();
		//	$("#usuario").val("Sin usuario.");
			//$("#BotonLogin").html("Login<br>-Sesión-");
			//$("#BotonLogin").removeClass("btn-danger");
			//$("#BotonLogin").addClass("btn-primary");

//			perfil.style.display="none";

		 $("#BotonLogin").html("Login");
  		 mostrandoperfil.style.visibility="hidden";
			
	});	
}
function MostrarPerfil()
{		//alert(queMostrar);
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostrarPerfil"}
	});
	funcionAjax.done(function(retorno){
		$("#perfil").html(retorno);

		//$("#informe").html("Correcto BOTONES!!!");	
	});
}






