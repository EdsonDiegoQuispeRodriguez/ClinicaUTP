<?php
	include("../../Modelo/conexion.php");
    $idCita=mysqli_insert_id($conexion); 
    $idDoctor = $_GET["idDoc"];
    $dia = $_GET["dia"];
    $idPaciente = $_GET["idPac"];
    $citas = "select P.idPersona,P.Nombre, H.Dia, CONCAT(H.Hora_Inicio,' - ',H.Hora_Fin) AS HORA
    from persona P inner join usuario U
    on P.idPersona=U.idPersona
    inner join rol R
    on U.idUsuario = R.IdUsuario
    inner join especialidad E
    on R.idRol = E.idRol
    inner join horario_rol HR
    on R.idRol = HR.IdRol
    inner join horario H
    on HR.IdHorario = H.IdHorario
    where P.idPersona= $idDoctor and H.Dia= '$dia'";
    $resultado =mysqli_query($conexion,$citas);
    $hora=null;
    while($row=mysqli_fetch_assoc($resultado)) {
        $hora=$row["HORA"];
    }

    $insertar="INSERT INTO cita VALUES(
        '$idCita',
        'Habilitado',
        10,
        '$dia',
        '$hora',
        '$idPaciente',
        '$idDoctor')
        " ;
    if (mysqli_query($conexion,$insertar)){ 
            $ultimo_id = mysqli_insert_id($conexion); 
			header ("location:../../historialcitaspaciente.php?id=$idPaciente");
  
    }else{ 
          echo "La inserción no se realizó 1"; 
    }
?>