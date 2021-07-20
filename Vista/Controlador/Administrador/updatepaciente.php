<?php  
    include('../../Modelo/conexion.php'); 
    $idPersona = ($_POST['idPersona']);
    $Numero_Documento = ($_POST['Numero_Documento']);
    $Nombre = ($_POST['Nombre']);
    $Celular = ($_POST['Celular']);
    $Correo = ($_POST['Correo']);
    $Contraseña = ($_POST['Contraseña']);
    $Estado =( $_POST['Estado']);

		$sentencia2 ="UPDATE persona inner join usuario
        on persona.idPersona = usuario.idPersona
        inner join rol 
        on usuario.idUsuario = rol.IdUsuario
        set persona.Nombre='$Nombre',
        persona.Numero_Documento = '$Numero_Documento',
        persona.Celular ='$Celular',
        usuario.Correo ='$Correo',
        usuario.Contraseña = '$Contraseña',
        usuario.Estado='$Estado'
        where persona.idPersona='$idPersona'";
	   if (mysqli_query($conexion,$sentencia2)){ 
            echo "<script>alert('Actualizacion de datos Correcta')";
            header("location:../../listapaciente.php");
  
      }else{ 
           echo('Todo incorrecto');
           echo  mysqli_error($conexion) ;
      }