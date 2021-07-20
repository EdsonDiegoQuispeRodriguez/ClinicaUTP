<?php
require_once('../Modelo/Conexion/Conexion.php');


function listarRol()
{
	if(isset($_REQUEST['BUSCAR'])){
		$valor = $_REQUEST['buscar'];
		return listarRolAdmin($valor);
	
	}
	else{
		return listarRolA();
	}
	

}

?>