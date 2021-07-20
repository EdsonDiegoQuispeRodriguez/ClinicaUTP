<?php
session_start();
require_once('../../Modelo/Conexion/Conexion.php');
$correo = $_POST['correoValidacion'];
$Contraseña = $_POST['Contraseña'];



$resultado = validarPaciente($correo,$Contraseña);
$id=null;
while($row=mysqli_fetch_assoc($resultado)) {
	$id=$row["idPersona"];
}
if($resultado->num_rows > 0)
{
	header("location:../../Vista/gestionpaciente.php?id=$id");

}else{
	header("location:../../Vista/paciente.php");

}
?>