<?php
	require_once('../../Modelo/Conexion/Conexion.php');
	$id=$_POST['id'];
	$Numero_Documento = $_POST['Numero_Documento'];
	verHistoriaD($id,$Numero_Documento);
?>