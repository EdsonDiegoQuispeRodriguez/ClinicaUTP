<?php
require_once('../../Modelo/Conexion/Conexion.php');
session_start();
$correo = $_POST['correoValidacion'];
$Contraseña = $_POST['Contraseña'];

$sql="SELECT *  
from persona
inner join usuario 
on persona.idPersona = usuario.idPersona
INNER join rol 
on usuario.idRol=rol.idRol
where rol.Tipo='MEDICO' AND (Correo='$correo' AND Contraseña='$Contraseña')AND(usuario.Estado='Habilitado')";

$resultado =mysqli_query($conexion,$sql);
$id=null;
while($row=mysqli_fetch_assoc($resultado)) {
	$id=$row["idPersona"];
}
if($resultado->num_rows > 0)
{
	header("location:../../Vista/gestionmedico.php?id=$id");

}else{
	header("location:../../Vista/doctor.php");

}
?>