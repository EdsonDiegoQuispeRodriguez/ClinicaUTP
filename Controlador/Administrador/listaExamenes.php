<?php
require_once('../Modelo/Conexion/Conexion.php');


function listarExamen()
{
	if(isset($_REQUEST['BUSCAR'])){
		$valor = $_REQUEST['buscar'];
		return listarExamenAdmin($valor);
	
	}
	else{
		return listarExamenA();
	}
	

}

?>