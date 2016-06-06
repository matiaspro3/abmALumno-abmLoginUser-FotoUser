
function CambiarFoto()
{		//alert(queMostrar);
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"CambiarFoto"}
	});
	funcionAjax.done(function(retorno){
		$("#principal").html(retorno);

		//$("#informe").html("Correcto BOTONES!!!");	
	});
}
function GuardarFoto()
{		//alert(queMostrar);
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"GuardarFoto"}
	});
	funcionAjax.done(function(retorno){
		$("#principal").html(retorno);

		//$("#informe").html("Correcto BOTONES!!!");	
	});
}







function MostrarUser()
{		//alert(queMostrar);
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostrarUser"}
	});
	funcionAjax.done(function(retorno){
		$("#principal").html(retorno);

		//$("#informe").html("Correcto BOTONES!!!");	
	});
}



function ModificarUser(idParametro)
{		
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"ModificarUser",
			id:idParametro	
		}
	});
	//alert(idParametro);

	funcionAjax.done(function(retorno){
		//alert(retorno);
		var alu =JSON.parse(retorno);
			//MostrarAltaUser(alu); 
			//alert(alu.email);
		$("#idalu").val(alu.id);
		$("#email").val(alu.email);
		$("#pass").val(alu.pass);
		$("#tipo").val(alu.tipo);
		
		
	});
	funcionAjax.fail(function(retorno){	
	//	$("#informe").html(retorno.responseText);	
		//alert("pep");
	});	



	/*cambiar esto.. asi funciona mal.... que el boton q invoca a EditarAlumno, invoque a mostrar, 
	 y en el .done de mostra llamo  a editar.
		//son 3 mostrar en lugar de uno.. ????

*/
}

function BorrarUser(idParametro)
{
	//alert(idParametro);
		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"BorrarUser",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		//Mostrar("MostrarGrilla");
		MostrarUser();
	//	$("#informe").html("cantidad de eliminados "+ retorno);	
		
	});
	funcionAjax.fail(function(retorno){	
	//	$("#informe").html(retorno.responseText);	
	});	
}

function AltaUser(){
		//alert(queMostrar);
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostrarFormAltaUser"}
	});
	funcionAjax.done(function(retorno){
		$("#principal").html(retorno);
		//$("#informe").html("Correcto!!!");	
		

	});
	funcionAjax.fail(function(retorno){
		$("#principal").html(":(");
		//$("#informe").html(retorno.responseText);	
	});
	funcionAjax.always(function(retorno){
		//alert("siempre "+retorno.statusText);

	});
}

function VerUserAmodidificar(usuario)
{
		//alert(queMostrar);
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostrarFormAltaUser"}
	});
	funcionAjax.done(function(retorno){
		$("#principal").html(retorno);
		ModificarUser(usuario);
		//$("#informe").html("Correcto!!!");	
		

	});
	funcionAjax.fail(function(retorno){
		$("#principal").html(":(");
		//$("#informe").html(retorno.responseText);	
	});
	funcionAjax.always(function(retorno){
		//alert("siempre "+retorno.statusText);

	});
}







function GuardarUser()
{
		var id=$("#idalu").val();
		var email=$("#email").val();
		var pass=$("#pass").val();
		var tipo=$("#tipo").val();

			

		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"GuardarUser",
			id:id,
			email:email,
			pass:pass,
			tipo:tipo	
		}

	});
	funcionAjax.done(function(retorno){
		//alert(retorno.email);
		//	Mostrar("MostrarGrilla");
		MostrarUser();
					
	});
	funcionAjax.fail(function(retorno){	
	//	$("#informe").html(retorno.responseText);	
	});	
}




