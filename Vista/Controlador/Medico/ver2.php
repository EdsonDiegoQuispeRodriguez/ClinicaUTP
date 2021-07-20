<?php
		$dbhost= "localhost";
		$dbuser= "root";
		$dbpass= "";
		$dbname= "utpclinica";
$conexion =mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
$id=$_POST['id'];
$Numero_Documento = $_POST['Numero_Documento'];
$sql="SELECT persona.Numero_Documento  
from persona
inner join usuario
on persona.idPersona= usuario.idPersona
inner join rol
on usuario.idUsuario =rol.idUsuario
where rol.Tipo='PACIENTE' AND persona.Numero_Documento='$Numero_Documento'";
$resultado=$conexion->query($sql);
if($resultado->num_rows > 0)
{
	header("location:../../historialcitas2.php?id=$id&num=$Numero_Documento");

}else{
	header("location:../../ver.php?id=$id");
}
?>