<?php
session_start();

$correo = $_POST['correoValidacion'];
$Contraseña = $_POST['Contraseña'];
require_once('../../Modelo/Conexion/Conexion.php');

$resultado = validarAdministrador($correo,$Contraseña);


$id=null;
while($row=mysqli_fetch_assoc($resultado)) {
	$id=$row["idPersona"];
}
if($resultado->num_rows > 0)
{
	header("location:../../Vista/gestionadmin.php?id=$id");

}else{
	header("location:../../Vista/administrador.php");

}
?>