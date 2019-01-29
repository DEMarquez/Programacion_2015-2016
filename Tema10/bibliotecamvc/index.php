<?php

	error_reporting(E_ERROR | E_WARNING | E_PARSE);
	require 'app/controller/mvc.controller.php';

     //se instancia al controlador 
	$mvc = new mvc_controller();

	///////
	//GET// --> si viene de una url
	///////

	if( $_GET['action'] == 'buscar' ) //muestra el modulo del buscador
	{	
			$mvc->buscador();	
	}
	else if( $_GET['action'] == 'history' ) //muestra  el modulo "historia "
	{
			$mvc->historia();	
	}
	else if( $_GET['action'] == 'insertar' ) //muestra  el modulo "insertar un nuevo usuario"
	{
			$mvc->introducirInfo();	
	}
	else if( $_GET['action'] == 'actualizar' ) //muestra  el modulo "actualizar-buscar" el usuario a actualizar
	{
			$mvc->actualizarInfo();
	}

	////////
	//POST// --> si viene de un botón de un formulario
	////////

	else if(isset($_POST['buscarActualizar'])) //muestra  el modulo "actualizar" para introducir la información del usuario
	{
			$mvc->actualizarInfo2();
	}
	else if(isset($_POST['actualizar'])) // muestra el formulario de buscar y el mensaje si ha habido éxito en la actualización
	{
		$mvc->actualizar($_POST['nombre'], $_POST['apellido1'], $_POST['apellido2'], $_POST['dni'], $_POST['facultad']);
	}
	else if( isset($_POST['facultad']) && 
			 isset($_POST['nombre']) &&
			 isset($_POST['apellido1']) &&
			 isset($_POST['apellido2']) &&
			 isset($_POST['dni']))//muestra el formulario y el mensaje si ha habido exito al insertar
	{
			$mvc->insertar($_POST['nombre'], $_POST['apellido1'], $_POST['apellido2'], $_POST['dni'], $_POST['facultad'] );
	}
	else if(isset($_POST['facultad']))//muestra el buscador y los resultados
	{
			$mvc->buscar( $_POST['facultad']);
	}


	/////////////////////////
	//EN CUALQUIER OTRO CASO --> página principal
	/////////////////////////

	
	else //Si no existe GET o POST -> muestra la pagina principal
	{	
		$mvc->principal();
	}

	

?>