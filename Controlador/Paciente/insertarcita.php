<?php
	require_once('../../Modelo/Conexion/Conexion.php');
    $idCita=mysqli_insert_id($conexion); 
    $idDoctor = $_GET["idDoc"];
    $dia = $_GET["dia"];
    $idPaciente = $_GET["idPac"];
    $citas = "SELECT P.idPersona,P.Nombre, D.Dia, CONCAT(T.HoraInicio,' - ',T.HoraFin) AS HORA
    from persona P inner join usuario U
    on P.idPersona=U.idPersona
    inner join rol R
    on U.idRol = R.idRol
    inner join especialidad E
    on U.idEspecialidad = E.idEspecialidad
    inner join usuario_horario UH
    on U.idUsuario = UH.idUsuario
    inner join dia D
    on UH.IdHorario = D.IdHorario
    inner join turno T
    on UH.idTurno = T.idTurno
    where P.idPersona= $idDoctor and D.Dia= '$dia'";
    $resultado =mysqli_query($conexion,$citas);
    $hora=null;
    while($row=mysqli_fetch_assoc($resultado)) {
        $hora=$row["HORA"];
    }

    $insertar="INSERT INTO cita VALUES(
        $idCita,
        'Habilitado',
        10,
        '$dia',
        '$hora',
        'NORMAL',
        $idPaciente,
        $idDoctor)
        " ;
    if (mysqli_query($conexion,$insertar)){ 
            $ultimo_id = mysqli_insert_id($conexion); 
			header ("location:../../Vista/historialcitaspaciente.php?id=$idPaciente");
  
    }else{ 
          echo "La inserción no se realizó 1";
          echo $idCita ;
          echo $dia ;
          echo $hora ;
          echo $idPaciente ;
          echo $idDoctor ;

    }
?>