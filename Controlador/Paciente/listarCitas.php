<?php
require_once('../Modelo/Conexion/Conexion.php');


function listarCitas()
{
	if(isset($_REQUEST['BUSCAR'])){
		$valor = $_REQUEST['buscar'];
		return listarCitasPaci($valor);
	
	}
	else{
		return listarCitasP();
	}
	

}

?>