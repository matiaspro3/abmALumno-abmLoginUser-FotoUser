
function MostrarInicio()
{
		//alert(queMostrar);
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostrarInicio"}
	});
	funcionAjax.done(function(retorno){
		//$("#pagewrap").html(retorno);
	//	$("#pagewrap").load('index.html');
	$("#principal").html(retorno);
   
	


		

	});
	funcionAjax.fail(function(retorno){
		$("#principal").html(":(");
		//$("#informe").html(retorno.responseText);	
	});
	funcionAjax.always(function(retorno){
		//alert("siempre "+retorno.statusText);

	});
}

function MostrarAlta()
{
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
function MostrarAlumno(alumno)
{
		//alert(queMostrar);
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostrarFormAlta"}
	});
	funcionAjax.done(function(retorno){
		$("#principal").html(retorno);
		EditarAlumno(alumno);
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



function MostrarGrilla()
{
		//alert(queMostrar);
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostrarGrilla"}
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

function MostarLogin()
{
		//alert("queMostrar");
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostarLogin"}
	});
	funcionAjax.done(function(retorno){
		$("#principal").html(retorno);
		//$("#main-nav").html(retorno);
		
		//$("#informe").html("Correcto Form login!!!");	
	});
	funcionAjax.fail(function(retorno){
		//$("#botonesABM").html(":(");
	//	$("#informe").html(retorno.responseText);	
	});
	funcionAjax.always(function(retorno){
		//alert("siempre "+retorno.statusText);

	});
}