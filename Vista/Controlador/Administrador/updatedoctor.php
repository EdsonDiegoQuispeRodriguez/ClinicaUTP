<?php  
include('../../Modelo/conexion.php');
        $idPersona = $_POST['idPersona'];
        $Numero_Documento = $_POST['Numero_Documento'];
        $Nombre = $_POST['Nombre'];
        $Nombre_Especialidad = $_POST['Nombre_Especialidad'];
        $Correo = $_POST['Correo'];
        $Contraseña = $_POST['Contraseña'];
        $Estado = $_POST['Estado'];
		$sentencia ="UPDATE persona inner join usuario
        on persona.idPersona = usuario.idPersona
        inner join rol 
        on usuario.idUsuario = rol.IdUsuario
        inner join especialidad
        on rol.idRol = especialidad.idRol
        set persona.Nombre='$Nombre',
        persona.Numero_Documento = '$Numero_Documento',
        especialidad.Nombre_Especialidad ='$Nombre_Especialidad',
        usuario.Correo ='$Correo',
        usuario.Contraseña = '$Contraseña',
        usuario.Estado='$Estado'
        where persona.idPersona ='$idPersona'";
	   if (mysqli_query($conexion,$sentencia)){ 
            echo "<script>alert('Actualizacion de datos Correcta');
            window.location='../../listadoctor2.php';</script>";
  
      }else{ 
           echo('Todo incorrecto');
      }