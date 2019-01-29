<?php
//Llamada al modelo
require_once("modelo/persona_modelo.php");
$per=new personas_modelo();
$datos=$per->get_personas();
//Llamada a la vista
require_once("vista/personas_vista1.php");
?>