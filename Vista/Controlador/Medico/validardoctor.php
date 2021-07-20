<?php
		$dbhost= "localhost";
		$dbuser= "root";
		$dbpass= "";
		$dbname= "utpclinica";
$conexion =mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
session_start();
$correo = $_POST['correoValidacion'];
$Contraseña = $_POST['Contraseña'];

$sql="Select *  
from usuario 
INNER join rol 
on usuario.idUsuario=rol.IdUsuario
where rol.Tipo='MEDICO' AND (Correo='$correo' AND Contraseña='$Contraseña')AND(usuario.Estado='Habilitado')";

$resultado =mysqli_query($conexion,$sql);
$id=null;
while($row=mysqli_fetch_assoc($resultado)) {
	$id=$row["idUsuario"];
}
if($resultado->num_rows > 0)
{
	header("location:../../gestionmedico.php?id=$id");

}else{
	header("location:../../doctor.php");

}
?>