function EditarAlumno(idParametro)
{	
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"EditarAlumno",
			id:idParametro	
		}
	});
	//alert(idParametro);

	funcionAjax.done(function(retorno){
		//alert(retorno);
		var alu =JSON.parse(retorno);
			//MostrarAlta(alu); 
			//alert(alu.nombre);
		$("#idalu").val(alu.id);
		$("#nombre").val(alu.nombre);
		$("#legajo").val(alu.legajo);
		$("#sexo").val(alu.sexo);
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

function BorrarAlumno(idParametro)
{
	//alert(idParametro);
		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"BorrarAlumno",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		//Mostrar("MostrarGrilla");
		MostrarGrilla();
	//	$("#informe").html("cantidad de eliminados "+ retorno);	
		
	});
	funcionAjax.fail(function(retorno){	
	//	$("#informe").html(retorno.responseText);	
	});	
}

function Alta (){
		//alert(queMostrar);
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostrarFormAlta"}
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
/*function Alta()
{	
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"Alta",
			
		}
	});
	//alert(idParametro);

	funcionAjax.done(function(retorno){
		//alert(retorno);
//		var alu =JSON.parse(retorno);
//		$("#idalu").val(alu.id);
			MostrarAlta();
	});
	funcionAjax.fail(function(retorno){	
//		$("#informe").html(retorno.responseText);	
		//alert("pep");
	});	

	//Mostrar("MostrarFormAlta");
}


*/

function GuardarAlumno()
{
		var id=$("#idalu").val();
		var nombre=$("#nombre").val();
		var legajo=$("#legajo").val();
		var sexo=$("#sexo").val();

			

		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"GuardarAlumno",
			id:id,
			nombre:nombre,
			legajo:legajo,
			sexo:sexo	
		}

	});
	funcionAjax.done(function(retorno){
		//alert(retorno.nombre);
		//	Mostrar("MostrarGrilla");
		MostrarGrilla();
		$("#informe").html("cantidad de agregados "+ retorno);	
		
	});
	funcionAjax.fail(function(retorno){	
	//	$("#informe").html(retorno.responseText);	
	});	
}





















/*function BorrarCD(idParametro)
{
	//alert(idParametro);
		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"BorrarCD",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		Mostrar("MostrarGrilla");
		$("#informe").html("cantidad de eliminados "+ retorno);	
		
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);	
	});	
}

function EditarCD(idParametro)
{
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"TraerCD",
			id:idParametro	
		}
	});
	funcionAjax.done(function(retorno){
		var cd =JSON.parse(retorno);	
		$("#idCD").val(cd.id);
		$("#cantante").val(cd.cantante);
		$("#titulo").val(cd.titulo);
		$("#anio").val(cd.año);
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);	
	});	
	Mostrar("MostrarFormAlta");
}

function GuardarCD()
{
		var id=$("#idCD").val();
		var cantante=$("#cantante").val();
		var titulo=$("#titulo").val();
		var anio=$("#anio").val();

		var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{
			queHacer:"GuardarCD",
			id:id,
			cantante:cantante,
			titulo:titulo,
			anio:anio	
		}
	});
	funcionAjax.done(function(retorno){
			Mostrar("MostrarGrilla");
		$("#informe").html("cantidad de agregados "+ retorno);	
		
	});
	funcionAjax.fail(function(retorno){	
		$("#informe").html(retorno.responseText);	
	});	
}


/*


*/