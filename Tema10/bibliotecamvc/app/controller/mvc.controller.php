<?php

require 'app/model/usuario.class.php';
require 'pageGenerator.php';

class mvc_controller {

	//////////////////////////////////////////////
    //MÉTODOS QUE MUESTRAN LAS PÁGINAS SECUNDARIAS DESPUÉS DE HABER INTERACTUADO CON LA PRINCIPAL//
    //////////////////////////////////////////////
   
	/* METODO QUE RECIBE LA ORDEN DE BUSQUEDA, PREPARA LOS DATOS Y SE COMUNICA
	     CON EL MODELO  PARA REALIZAR LA CONSULTA
		INPUT
		 $facultad | facultad de los usuarios a buscar
		 OUTPUT
		 HTML 	| el resultado obtenido del modelo es procesado y convertido en codigo html para que el VIEW pueda mostrarlo	
	*/
    function buscar($facultad)
   {
		$usuario = new Usuario();	
		//carga la plantilla 
		$pagina=load_template('- Resultados de la busqueda de usuarios -');				
		//carga html del buscador
  	    $buscador = load_page('app/views/default/modules/m.buscador.php');				
	      //obtiene  los registros de la base de datos
		  ob_start();
		  //realiza consulta al modelo
		   $tsArray = $usuario->usuarios($facultad);			   
	   		if($tsArray!=''){//si existen registros carga el modulo  en memoria y rellena con los datos 
						$titulo = 'Resultado de busqueda por "'.$facultad.'" ';
						//carga la tabla de la seccion de VIEW
			  			include 'app/views/default/modules/m.table_univ.php';
						$table = ob_get_clean();	
						//realiza el parseado 
						$pagina = replace_content('/\#CONTENIDO\#/ms', $buscador.$table , $pagina);	
	   		}else{//si no existen datos -> muestra mensaje de error
		   			$pagina = replace_content('/\#CONTENIDO\#/ms' ,$buscador.'<h1>No existen resultados</h1>' , $pagina);	
	   		}		
		view_page($pagina);
   }


	/* METODO QUE RECIBE LA ORDEN DE INSERTAR, ENVIA LOS DATOS Y SE COMUNICA
	     CON EL MODELO PARA REALIZAR LA CONSULTA
		INPUT
		 $facultad | nombre, apellido1, apellido2, dni, facultad del usuario a insertar
		 OUTPUT
		 HTML 	| el resultado obtenido del modelo es procesado y convertido en codigo html para que el VIEW pueda mostrarlo	
	*/
   function insertar($nombre, $apellido1, $apellido2, $dni, $facultad)
   {
		$usuario = new Usuario();	
		//carga la plantilla 
		$pagina=$load_template('- Inserción de datos de usuarios -');				
		//carga html del buscador
  	    $buscador = load_page('app/views/default/modules/m.insertar.php');				
	      //obtiene  los registros de la base de datos
		  ob_start();
		  //realiza consulta al modelo

		    $tsArray = $usuario->insertar($nombre, $apellido1, $apellido2, $dni, $facultad);			   
	   		if($tsArray){//si existen registros carga el modulo  en memoria y rellena con los datos 
						$titulo = 'Resultado de insertar usuario ';
						//carga la tabla de la seccion de VIEW
			  				
						//realiza el parseado 
						$pagina = replace_content('/\#CONTENIDO\#/ms', $buscador. '<h1>Se ha insertado correctamente</h1>', $pagina);	
	   		}else{//si no existen datos -> muestra mensaje de error
		   			$pagina = replace_content('/\#CONTENIDO\#/ms' ,$buscador.'<h1>Ha habido un error en la inserción</h1>' , $pagina);	
	   		}		
		view_page($pagina);
   }



	/* METODO QUE RECIBE LA ORDEN DE ACTUALIZAR, ENVIA LOS DATOS Y SE COMUNICA
	     CON EL MODELO PARA REALIZAR LA CONSULTA
		INPUT
		 $nombre, $apellido1, $apellido2, $dni, $facultad del usuario a actualizar
		 OUTPUT
		 HTML 	| el resultado obtenido del modelo es procesado y convertido en codigo html para que el VIEW pueda mostrarlo	
	*/
   function actualizar($nombre, $apellido1, $apellido2, $dni, $facultad)
   {
		$usuario = new Usuario();	
		//carga la plantilla 
		$pagina=load_template('- Actualización  de usuarios -');				
		//carga html del buscador
  	    $buscador = load_page('app/views/default/modules/m.actualizar1.php');				
	      //obtiene  los registros de la base de datos
		  ob_start();
		  //realiza consulta al modelo bb
		  $res = $usuario->actualizar($nombre, $apellido1, $apellido2, $dni, $facultad);	
		  
		  	   
	   	  if($res){//si existen registros carga el modulo  en memoria y rellena con los datos 
						$titulo = 'Resultado de actualización del usuario con dni: "'.$dni.'" ';
						//carga la tabla de la seccion de VIEW
			  			
						$table = ob_get_clean();	
						//realiza el parseado 
						$pagina = replace_content('/\#CONTENIDO\#/ms', $buscador."<h1>Actualizado correctamente</h1>".
						"dni: ". $dni . "<br>" .
						"nombre: ". $nombre . "<br>" .
						"apellido1: ". $apellido1 . "<br>" .
						"apellido2: ". $apellido2 . "<br>" .
						"facultad: ". $facultad . "<br>" 
						, $pagina);	
	   		}else{//si no existen datos -> muestra mensaje de error
		   			$pagina = replace_content('/\#CONTENIDO\#/ms' ,$buscador.'<h1>No se ha podido actualizar</h1>' , $pagina);	
	   		}		
		view_page($pagina);
   }

   //////////////////////////////////////////////
   //MÉTODOS QUE MUESTRAN LAS PÁGINAS INICIALES//
   //////////////////////////////////////////////
   
   /* METODO QUE MUESTRA LA PAGINA PRINCIPAL CUANDO NO EXISTEN NUEVAS ORDENES
   OUTPUT
   HTML | codigo html de la pagina   
   */
   function principal()
   {
   		//creo una cadena con la página html con el título que yo quiera y la guardo en la variable $pagina 
		$pagina=load_template('Pagina Principal MVC');
		//en $html guardo el módulo principal				
		$html = load_page('app/views/default/modules/m.principal.php');
		//reemplazo la cadena #CONTENIDO# del $pagina por el $html de la página principal y guardo
		//la pagina resultante en $pagina
		$pagina = replace_content('/\#CONTENIDO\#/ms' ,$html , $pagina);
		//muestro la página
		view_page($pagina);
   }

   /* METODO QUE MUESTRA LA PAGINA HISTORIA DE LA BIBLIOTECA, ES UNA PAGINA ESTATICA
   OUTPUT
   HTML | codigo html de la pagina   
   */
   function historia()
   {
		$pagina=load_template('Historia de la biblioteca');				
		$html = load_page('app/views/default/modules/m.historia.php');
		$pagina = replace_content('/\#CONTENIDO\#/ms' ,$html , $pagina);
		view_page($pagina);
   }
   
	/* METODO QUE MUESTRA EN PANTALLA EL FORMULARIO DE BUSQUEDA
	   HTML | codigo html de la pagina  con el buscador incluido
	*/
	function buscador(){
		$pagina=load_template('Busqueda de usuarios');						
		$buscador = load_page('app/views/default/modules/m.buscador.php');
		$pagina = replace_content('/\#CONTENIDO\#/ms' ,$buscador , $pagina);	
		view_page($pagina);
	}


	/* METODO QUE MUESTRA EN PANTALLA EL FORMULARIO DE INSERCION DE USUARIOS
	   HTML | codigo html de la pagina  con el buscador incluido
	*/
	function introducirInfo(){
		$pagina=load_template('Inserción de usuarios');						
		$insercion = load_page('app/views/default/modules/m.insertar.php');
		$pagina = replace_content('/\#CONTENIDO\#/ms' ,$insercion , $pagina);	
		view_page($pagina);
	}

	/* METODO QUE MUESTRA EN PANTALLA EL FORMULARIO DE BUSQUEDA DE USUARIO PARA ACTUALIZACIÓN
	   HTML | codigo html de la pagina  con el buscador incluido
	*/
	function actualizarInfo(){
		$pagina=load_template('Actualización de usuarios');						
		$actualizar = load_page('app/views/default/modules/m.actualizar1.php');
		$pagina = replace_content('/\#CONTENIDO\#/ms' ,$actualizar , $pagina);	
		view_page($pagina);
	}


	/* METODO QUE MUESTRA EN PANTALLA EL FORMULARIO DE ACTUALIZACIÓN DE DATOS DE USUARIO
	   HTML | codigo html de la pagina  con el buscador incluido
	*/
	function actualizarInfo2(){

		$pagina=load_template('Actualización de usuarios');	
		
		$res = $this->buscarDNI($_POST['dni']);
		if($res!=''){
			$nombre = $res[0]['Nombre'];
			$apellido1 = $res[0]['Apellido1'];
			$apellido2 = $res[0]['Apellido2'];
			$dni = $res[0]['DNI'];
			$facultad = $res[0]['Facultad'];
					
			$actualizar = load_page('app/views/default/modules/m.actualizar2.php');
			$actualizar = replace_content('/\#dni\#/ms' ,$dni, $actualizar);
			$actualizar = replace_content('/\#nombre\#/ms' ,$nombre, $actualizar);
			$actualizar = replace_content('/\#apellido1\#/ms' ,$apellido1, $actualizar);
			$actualizar = replace_content('/\#apellido2\#/ms' ,$apellido2, $actualizar);
			$actualizar = replace_content('/\#facultad\#/ms' ,$facultad, $actualizar);
			
		}else{
			$actualizar = load_page('app/views/default/modules/m.actualizar1.php');
			$pagina = replace_content('/\#CONTENIDO\#/ms' ,$actualizar.'<h1>No existe el usuario</h1>' , $pagina);

		}
			
		$pagina = replace_content('/\#CONTENIDO\#/ms' ,$actualizar , $pagina);	
		view_page($pagina);
	}


	/* METODO QUE RECIBE LA ORDEN DE BUSQUEDA, PREPARA LOS DATOS Y SE COMUNICA
	     CON EL MODELO  PARA REALIZAR LA CONSULTA
		INPUT
		 $dni | dni del usuario a buscar
		 OUTPUT
		 ARRAY 	| el resultado obtenido del modelo es devuelto
	*/

	function buscarDni($dni){
		$usuario = new Usuario();
		$tsArray = $usuario->usuariosDni($dni);	
		if($tsArray!=''){
			return $tsArray;
		}else{
			return '';
		}
	}
	
}
?>