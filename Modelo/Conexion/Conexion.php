<?php
require_once('Credenciales.php');
$conexion = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
    
$result = '';

if( $conexion->connect_errno )
{
	echo 'Error en la conexión';
	exit;
}

    function conexionA(){
        global $conexion;
        return $conexion;
    }
//<-----------------------------------------------------ADMINISTRADOR----------------------------------------------------->
    //validar Administrador
    function validarAdministrador($correo,$Contraseña){
        global $conexion;
        $sql="SELECT *  
        from persona
        inner join usuario 
        on persona.idPersona = usuario.idPersona
        INNER join rol 
        on usuario.idRol=rol.idRol
        where rol.Tipo='ADMINISTRADOR' AND (Correo='$correo' AND Contraseña='$Contraseña')";
        $resultado =mysqli_query($conexion,$sql);
        return $resultado;
    }
    //listar Doctor
    function listarDoctorA(){
        global $conexion;
        $sql = "SELECT persona.idPersona,rol.Tipo,persona.Numero_Documento,persona.Nombre,especialidad.Nombre_Especialidad,usuario.Correo,usuario.Contraseña,usuario.Estado  
        from persona inner join usuario 
        on persona.idPersona=usuario.idPersona
        inner join rol 
        on usuario.idRol=rol.idRol
        left join especialidad
        on usuario.idEspecialidad=especialidad.idEspecialidad
        ";
        
        $resultado =mysqli_query($conexion,$sql);
        return $resultado;
    }
    function listarDoctorAdmin($q){
        global $conexion;
        $sql = "SELECT persona.idPersona,rol.Tipo,persona.Numero_Documento,persona.Nombre,especialidad.Nombre_Especialidad,usuario.Correo,usuario.Contraseña,usuario.Estado  
        from persona inner join usuario 
        on persona.idPersona=usuario.idPersona
        inner join rol 
        on usuario.idRol=rol.idRol
        left join especialidad
        on usuario.idEspecialidad=especialidad.idEspecialidad
        where ( persona.idPersona LIKE '%$q%'  OR  persona.Numero_Documento LIKE '%$q%'  OR persona.Nombre LIKE '%$q%' 
        OR especialidad.Nombre_Especialidad LIKE '%$q%'  OR usuario.Correo LIKE '%$q%'  OR usuario.Contraseña 
        LIKE '%$q%'  OR usuario.Estado LIKE '%$q%' OR rol.Tipo LIKE '%$q%')";
        
        $resultado =mysqli_query($conexion,$sql);
        return $resultado;
    }
    //listar Pacientes
    function listarPacienteA(){
        global $conexion;
        $sql = "SELECT persona.idPersona,persona.Numero_Documento,persona.Nombre,persona.Celular,usuario.Correo,usuario.Contraseña,usuario.Estado  
        from persona inner join usuario 
        on persona.idPersona=usuario.idPersona
        inner join rol 
        on usuario.idRol=rol.idRol
        where rol.Tipo='PACIENTE' ";
        
        $resultado =mysqli_query($conexion,$sql);
        return $resultado;
    }
    function listarPacienteAdmin($q){
        global $conexion;
        $sql = "SELECT persona.idPersona,persona.Numero_Documento,persona.Nombre,persona.Celular,usuario.Correo,usuario.Contraseña,usuario.Estado  
        from persona inner join usuario 
        on persona.idPersona=usuario.idPersona
        inner join rol 
        on usuario.idRol=rol.idRol
        where rol.Tipo='PACIENTE' and ( persona.idPersona LIKE '%$q%'  OR  persona.Numero_Documento LIKE '%$q%'  OR persona.Nombre LIKE '%$q%' 
        OR persona.Celular LIKE '%$q%'  OR usuario.Correo LIKE '%$q%'  OR usuario.Contraseña 
        LIKE '%$q%'  OR usuario.Estado LIKE '%$q%' )" ;

        
        $resultado =mysqli_query($conexion,$sql);
        return $resultado;
    }
    //listar Roles
    function listarRolA(){
        global $conexion;
        $sql = "SELECT rol.tipo 
        from rol";
        $resultado =mysqli_query($conexion,$sql);
        return $resultado;
    }
    function listarRolAdmin($q){
        global $conexion;
        $sql = "SELECT rol.tipo 
        from rol where  ( rol.tipo  LIKE '%$q%')";
        $resultado =mysqli_query($conexion,$sql);
        return $resultado;
    }
    //listar Examenes
    function listarExamenA(){
        global $conexion;
        $sql = "SELECT examenes.tipo ,examenes.precio
        from examenes ";
        $resultado =mysqli_query($conexion,$sql);
        return $resultado;
    }
    function listarExamenAdmin($q){
        global $conexion;
        $sql = "SELECT examenes.tipo ,examenes.precio
        from examenes where  ( examenes.tipo LIKE '%$q%'  OR  examenes.precio LIKE '%$q%')";
        $resultado =mysqli_query($conexion,$sql);
        return $resultado;
    }
    //añadir Doctor
    function insertarDoctor($id,$nombre,$AppP,$AppM,$nacimiento,$celular,$tipodoc,$numdoc,$correo_presonal,$tipo,$direccion,
    $distrito,$provincia,$departamento,$pais,$correoValidacion,$Contraseña,$tipoEspecialidad){
        global $conexion;
        $idPersona=mysqli_insert_id($conexion); 
        $idUsuario=mysqli_insert_id($conexion);
        //$idRol=mysqli_insert_id($conexion);
        //$idHorario=mysqli_insert_id($conexion);
        //$idEspecialidad=mysqli_insert_id($conexion);
        $insertar="INSERT INTO persona VALUES(
            '$idPersona',
            '$nombre',
            '$AppP',
            '$AppM',
            '$nacimiento',
            '$celular',
            '$tipodoc',
            '$numdoc',
            '$correo_presonal',
            '$tipo',
            '$direccion',
            '$distrito',
            '$provincia',
            '$departamento',
            '$pais')
            " ;


        if (mysqli_query($conexion,$insertar)){ 
            $ultimo_id = mysqli_insert_id($conexion); 

        }else{ 
            echo "La inserción no se realizó 1"; 
        }
        $insertar2="INSERT INTO usuario VALUES(
            '$idUsuario',
            '$correoValidacion',
            '$Contraseña',
            'HABILITADO',
            '$ultimo_id',
            '2',
            '$tipoEspecialidad')";
        /*if (mysqli_query($conexion,$insertar2)){ 
            $ultimo_id2 = mysqli_insert_id($conexion); 
        }else{ 
            echo "La inserción no se realizó 2"; 
        } 
        
        for($x=0;$x<$num;$x++){
            $insertar4="INSERT INTO usuario_horario VALUES(
                '$ultimo_id2',
                '$arregloDias[$x]',
                '$horarioinico'
                )";   
        }
          */  
        if(mysqli_query($conexion,$insertar2))
        {
            header("location:../../Vista/gestionadmin.php?id=$id");
        } 
        else
        {
            echo mysqli_error($conexion);
        }
    }
    function mostrarEspecialidad(){
        global $conexion;
        $sql = "SELECT * FROM ESPECIALIDAD";
        $resultado =mysqli_query($conexion,$sql);
        return $resultado;
    }
    function mostrarDias(){
        global $conexion;
        $sql = "SELECT * FROM DIA";
        $resultado =mysqli_query($conexion,$sql);
        return $resultado;
    }
    function mostrarTurnos(){
        global $conexion;
        $sql = "SELECT * FROM TURNO";
        $resultado =mysqli_query($conexion,$sql);
        return $resultado;
    }
//<-----------------------------------------------------MEDICOS----------------------------------------------------->    
    //citas pendientes de doctore
    function listarPendientesM($id){
        global $conexion;
        $sql = "SELECT C.idCita, P1.Numero_Documento, P1.Nombre,P1.idPersona as codPac, CONCAT(C.Fecha_Programada,' | ',C.Hora_Programada)as FECHA, C.Estado
        from cita C inner join persona P1
        on C.CodPaciente = P1.idPersona
        inner join persona P2
        on C.CodDoctor = P2.idPersona
        where P2.idPersona=$id and C.Estado<>'Cancelado' and C.Estado<>'Atendido' and C.Prioridad = 'NORMAL'";
        $resultado =mysqli_query($conexion,$sql);
        return $resultado;
    }
    function listarPendientesMedico($id,$q){
        global $conexion;
        $sql = "SELECT C.idCita, P1.Numero_Documento, P1.Nombre, CONCAT(C.Fecha_Programada,' | ',C.Hora_Programada)as FECHA, C.Estado
        from cita C inner join persona P1
        on C.CodPaciente = P1.idPersona
        inner join persona P2
        on C.CodDoctor = P2.idPersona
        where P2.idPersona=$id and C.Estado<>'Cancelado' and C.Estado<>'Atendido' and C.Prioridad = 'NORMAL' 
        and ( C.idCita LIKE '%$q%'  OR  P1.Numero_Documento LIKE '%$q%'  OR P1.Nombre LIKE '%$q%' 
        OR C.Fecha_Programada LIKE '%$q%'  OR C.Hora_Programada LIKE '%$q%'  OR C.Estado 
        LIKE '%$q%'  )" ;
        $resultado =mysqli_query($conexion,$sql);
        return $resultado;
    }
    //citas pendientes de doctore
    function listarAtendidosM($id){
        global $conexion;
        $sql = "SELECT C.idCita, P1.Numero_Documento, P1.Nombre,P1.idPersona as codPac, CONCAT(C.Fecha_Programada,' | ',C.Hora_Programada)as FECHA, C.Estado
        from cita C inner join persona P1
        on C.CodPaciente = P1.idPersona
        inner join persona P2
        on C.CodDoctor = P2.idPersona
        where P2.idPersona=$id and C.Estado<>'Cancelado' and C.Estado<>'HABILITADO' and C.Prioridad = 'NORMAL'";
        $resultado =mysqli_query($conexion,$sql);
        return $resultado;
    }
    function listarAtendidosMedico($id,$q){
        global $conexion;
        $sql = "SELECT C.idCita, P1.Numero_Documento, P1.Nombre, CONCAT(C.Fecha_Programada,' | ',C.Hora_Programada)as FECHA, C.Estado
        from cita C inner join persona P1
        on C.CodPaciente = P1.idPersona
        inner join persona P2
        on C.CodDoctor = P2.idPersona
        where P2.idPersona=$id and C.Estado<>'Cancelado' and C.Estado<>'HABILITADO'  and C.Prioridad = 'NORMAL'
        and ( C.idCita LIKE '%$q%'  OR  P1.Numero_Documento LIKE '%$q%'  OR P1.Nombre LIKE '%$q%' 
        OR C.Fecha_Programada LIKE '%$q%'  OR C.Hora_Programada LIKE '%$q%'  OR C.Estado 
        LIKE '%$q%'  )" ;
        $resultado =mysqli_query($conexion,$sql);
        return $resultado;
    }
    //citas pendientes de doctor por Emergencia
    function listarPendientesEmergencia($id){
        global $conexion;
        $sql = "SELECT C.idCita, P1.Numero_Documento, P1.Nombre,P1.idPersona as codPac, CONCAT(C.Fecha_Programada,' | ',C.Hora_Programada)as FECHA, C.Estado
        from cita C inner join persona P1
        on C.CodPaciente = P1.idPersona
        inner join persona P2
        on C.CodDoctor = P2.idPersona
        where P2.idPersona=$id and C.Estado<>'Cancelado' and C.Estado<>'Atendido' and C.Prioridad = 'EMERGENCIA'";
        $resultado =mysqli_query($conexion,$sql);
        return $resultado;
    }
    //Cancelar citas
    function updateMedico($idCita,$id){
        global $conexion;
        $update="UPDATE cita 
        set Estado='Cancelado'
        where idCita = $idCita";


        if (mysqli_query($conexion,$update)){ 
                header ("location:../../Vista/pendientes.php?id=$id");
    
        }else{ 
            echo "La inserción no se realizó 1"; 
            echo mysqli_error($conexion);
        }
    }
    //REGISTRAR ANALISIS
    function registrarExamen($id,$idCita,$idExamen,$fecha,$hora,$prioridad){
        global $conexion;
        $insertar="INSERT INTO examen_atencion VALUES(
            $idCita,
            '$idExamen',
            '$fecha',
            '$hora',
            'PENDIENTE',
            '$prioridad'
    		,null)" ;
        if (mysqli_query($conexion,$insertar)){ 
            header("location:../../Vista/analisis.php?id=$id&idCita=$idCita");

        }else{ 
        echo "La inserción no se realizó 1"; 
        echo mysqli_error($conexion);
        }
    }
    //REGISTRAR TRATAMIENTO
    function registrarTratamiento($ID,$IDCITA,$MEDICAMENTO,$TIPO,$CANTIDAD,$FECHAINI,$FECHAFIN,$DETALLE){
        global $conexion;
        $insertar="INSERT INTO medicamento_tratamiento VALUES(
            $MEDICAMENTO,
        $IDCITA,
            '$TIPO',
            '$FECHAINI',
            '$FECHAFIN',
            $CANTIDAD
    		,'$DETALLE','PENDIENTE')" ;
        if (mysqli_query($conexion,$insertar)){ 
            header("location:../../Vista/medicar.php?id=$ID&idCita=$IDCITA");

        }else{ 
        echo "La inserción no se realizó 1"; 
        echo mysqli_error($conexion);
        }
    }
    //atender cita
    function atenderCitaM($idCita,$id,$idPac,$talla,$peso,$Presion,$temperatura,$sintomas,$detalle){
        global $conexion;
        

        $sql ="SELECT cita.CodPaciente
        from cita inner join persona
        on cita.CodPaciente=persona.idPersona
        where cita.idCita=$idCita AND cita.Estado='Habilitado'";
        $resultado3 =mysqli_query($conexion,$sql);
        $Paciente=null;
        while($row=mysqli_fetch_assoc($resultado3)) {
            $Paciente=$row["CodPaciente"];
        }
        $insertar="INSERT INTO atencion VALUES(
            $idCita,
            '$talla',
            '$peso',
            '$Presion',
            '$temperatura',
            '$sintomas',
            '$detalle',
            $idPac
    		,$id)" ;
        if (mysqli_query($conexion,$insertar)){ 
            $ultimo_id33 = mysqli_insert_id($conexion); 

        }else{ 
        echo "La inserción no se realizó 1"; 
        echo mysqli_error($conexion);
        }
        $insertar2="INSERT INTO detalle_atencion VALUES(
            $idCita,
            null,
            null,
            null,
            null,
            null,
            null
    		,$idCita)" ;
        if (mysqli_query($conexion,$insertar2)){ 
            $ultimo_id33 = mysqli_insert_id($conexion); 

        }else{ 
        echo "La inserción no se realizó 2"; 
        echo mysqli_error($conexion);
        }
        
        $update2="UPDATE cita
        set Estado = 'Atendido'
        where idCita=$idCita";
        
        if (mysqli_query($conexion,$update2)){ 
            $ultimo_id35 = mysqli_insert_id($conexion); 
            header("location:../../Vista/atendidos.php?id=$id");

        }else{ 
            echo "La inserción no se realizó 1"; 
            echo mysqli_error($conexion);
        }
    }
    /*
    function atenderCitaM($idCita,$id,$talla,$peso,$Presion,$temperatura,$sintomas,$detalle,$descarte,$diagnostico,$tipotratamiento,$detallefinal,$fechain,$fechafint){
        require_once('../Modelo/Conexion/Conexion.php');
        global $conexion;
        

        $sql ="SELECT cita.CodPaciente
        from cita inner join persona
        on cita.CodPaciente=persona.idPersona
        where cita.idCita=$idCita AND cita.Estado='Habilitado'";
        $resultado3 =mysqli_query($conexion,$sql);
        $Paciente=null;
        while($row=mysqli_fetch_assoc($resultado3)) {
            $Paciente=$row["CodPaciente"];
        }
        $insertar="INSERT INTO atencion VALUES(
            '$idAtencion',
            '$talla',
            '$peso',
            '$Presion',
            '$temperatura',
            '$sintomas',
            '$detalle',
            '$Paciente')
            " ;
        if (mysqli_query($conexion,$insertar)){ 
            $ultimo_id33 = mysqli_insert_id($conexion); 

        }else{ 
        echo "La inserción no se realizó 1"; 
        echo mysqli_error($conexion);
        }
        $inserta2="INSERT INTO detalle_atencion VALUES(
            '$idDetalle_Atencion',
            '$descarte',
            '$diagnostico',
            '$tipotratamiento',
            '$detallefinal',
            '$fechain',
            '$fechafint',
            '$ultimo_id33')
            " ;
        $update2="UPDATE cita
        set Estado = 'Atendido'
        where idCita=$idCita";
        
        if (mysqli_query($conexion,$inserta2)){ 
        $ultimo_id34 = mysqli_insert_id($conexion); 
        

        }else{ 
            echo "La inserción no se realizó 1"; 
            echo mysqli_error($conexion);
        }
        if (mysqli_query($conexion,$update2)){ 
            $ultimo_id35 = mysqli_insert_id($conexion); 
            header("location:../../Vista/pendientes.php?id=$id");

        }else{ 
            echo "La inserción no se realizó 1"; 
            echo mysqli_error($conexion);
        }
    }*/
    //ver Historial
    function verHistoriaD($id,$Numero_Documento){
        global $conexion;
        $sql="SELECT persona.Numero_Documento  
        from persona
        inner join usuario
        on persona.idPersona= usuario.idPersona
        inner join rol
        on usuario.idRol =rol.idRol
        where rol.Tipo='PACIENTE' AND persona.Numero_Documento='$Numero_Documento'";
        $resultado=$conexion->query($sql);
        if($resultado->num_rows > 0)
        {
            header("location:../../Vista/historialcitas2.php?id=$id&num=$Numero_Documento");

        }else{
            header("location:../../Vista/ver.php?id=$id");
        }
    }
    //listar tipos de Examenes
    function listarExamenM(){
        global $conexion;
        $sql = "SELECT examenes.Tipo,examenes.idExamen
        from examenes";
        $resultado =mysqli_query($conexion,$sql);
        return $resultado;
    }
    //listar Examenes puestos
    function listarAnalisis($idCita){
        global $conexion;
        $sql = "SELECT EA.idDetalle_Atencion, e.Tipo, EA.Fecha,EA.Hora,e.Precio, EA.Estado,EA.idExamen
        from detalle_atencion DA
        inner join examen_atencion EA
        on DA.idDetalle_Atencion = EA.idDetalle_Atencion
        inner join examenes E
        ON E.IdExamen = EA.idExamen
        where EA.idDetalle_Atencion = $idCita";
        $resultado =mysqli_query($conexion,$sql);
        return $resultado;
    }
    //listar Medicamentos
    function listarMedicamentosM(){
        global $conexion;
        $sql = "SELECT CONCAT(medicamento.Nombre,' ( ',medicamento.Tipo,' - ',medicamento.Detalle,' ) ') AS Nombre,medicamento.idMedicamento
        from medicamento";
        $resultado =mysqli_query($conexion,$sql);
        return $resultado;
    }
    //listar Medicamentos puestos
    function listarMedM($idCita){
        global $conexion;
        $sql = "SELECT MT.tipoTratamiento, M.Nombre,MT.Cantidad,M.Detalle,MT.FechaInicio,MT.FechaFin,DA.idDetalle_Atencion
        from medicamento M
        inner join medicamento_tratamiento MT
        on M.IdMedicamento = MT.IdMedicamento
        inner join detalle_atencion DA
        on MT.IdDetalle_Atencion= DA.IdDetalle_Atencion
        where DA.IdDetalle_Atencion = $idCita";
        $resultado =mysqli_query($conexion,$sql);
        return $resultado;
    }
    function verResultados($idDetalle_Atencion,$idExamen){
        global $conexion;
        $sql = "SELECT * FROM `examen_atencion` WHERE idDetalle_Atencion=$idDetalle_Atencion and idExamen =$idExamen";
        $resultado =mysqli_query($conexion,$sql);
        return $resultado;
    }

//<-----------------------------------------------------LABORATORIO----------------------------------------------------->
    //listar Examenes puestos
    function listarPendientesLaboratorio($q){
        global $conexion;
        $sql = "SELECT P.Nombre,e.IdExamen, e.Tipo, EA.Fecha,EA.Hora,e.Precio, EA.Estado,EA.Prioridad
        from detalle_atencion DA
        inner join examen_atencion EA
        on DA.idDetalle_Atencion = EA.idDetalle_Atencion
        inner join examenes E
        ON E.IdExamen = EA.idExamen
        inner join atencion A
        ON DA.IdAtencion = A.IdAtencion
        inner join persona P
        ON A.IdPaciente = P.idPersona
        where EA.Estado = 'PENDIENTE' and (EA.idDetalle_Atencion LIKE '%$q%'  OR  e.Tipo LIKE '%$q%'  OR EA.Fecha LIKE '%$q%' 
        OR EA.Hora LIKE '%$q%'  OR e.Precio LIKE '%$q%' OR EA.Estado LIKE '%$q%' OR EA.Prioridad LIKE '%$q%' )";
        $resultado =mysqli_query($conexion,$sql);
        return $resultado;
    }

    function listarPendientesL(){
        global $conexion;
        $sql = "SELECT P.Nombre,e.IdExamen, e.Tipo, EA.Fecha,EA.Hora,e.Precio, EA.Estado,EA.Prioridad,EA.idDetalle_Atencion
        from detalle_atencion DA
        inner join examen_atencion EA
        on DA.idDetalle_Atencion = EA.idDetalle_Atencion
        inner join examenes E
        ON E.IdExamen = EA.idExamen
        inner join atencion A
        ON DA.IdAtencion = A.IdAtencion
        inner join persona P
        ON A.IdPaciente = P.idPersona
        where EA.Estado = 'PENDIENTE'";
        $resultado =mysqli_query($conexion,$sql);
        return $resultado;
    }
    //<-----------------------------------------------------FARMACIA----------------------------------------------------->
    //listar Examenes puestos
    function listarPendientesFarmacia($q){
        global $conexion;
        $sql = "SELECT P.Nombre,e.IdExamen, e.Tipo, EA.Fecha,EA.Hora,e.Precio, EA.Estado,EA.Prioridad
        from detalle_atencion DA
        inner join examen_atencion EA
        on DA.idDetalle_Atencion = EA.idDetalle_Atencion
        inner join examenes E
        ON E.IdExamen = EA.idExamen
        inner join atencion A
        ON DA.IdAtencion = A.IdAtencion
        inner join persona P
        ON A.IdPaciente = P.idPersona
        where MT.Estado = 'PENDIENTE' and (EA.idDetalle_Atencion LIKE '%$q%'  OR  e.Tipo LIKE '%$q%'  OR EA.Fecha LIKE '%$q%' 
        OR EA.Hora LIKE '%$q%'  OR e.Precio LIKE '%$q%' OR EA.Estado LIKE '%$q%' OR EA.Prioridad LIKE '%$q%') ";
        $resultado =mysqli_query($conexion,$sql);
        return $resultado;
    }

    /*
    select *
from medicamento M
inner join medicamento_tratamiento MT
on M.IdMedicamento = MT.IdMedicamento
inner join detalle_atencion DA
on MT.IdDetalle_Atencion = DA.idDetalle_Atencion
inner join atencion A
ON DA.IdAtencion=A.IdAtencion
inner join persona P 
on A.IdPaciente = P.idPersona
    */
    function listarPendientesF(){
        global $conexion;
        $sql = "SELECT DA.idDetalle_Atencion,P.Numero_Documento,P.Nombre,P.Correo_Electronico,MT.Estado
        from medicamento M
        inner join medicamento_tratamiento MT
        on M.IdMedicamento = MT.IdMedicamento
        inner join detalle_atencion DA
        on MT.IdDetalle_Atencion = DA.idDetalle_Atencion
        inner join atencion A
        ON DA.IdAtencion=A.IdAtencion
            inner join persona P 
            on A.IdPaciente = P.idPersona
        where MT.Estado = 'PENDIENTE'
        group by DA.idDetalle_Atencion";
        $resultado =mysqli_query($conexion,$sql);
        return $resultado;
    }
    //listar Examenes puestos
    function listarCompraF($idAtencion){
        global $conexion;
        $sql = "SELECT MT.idDetalle_Atencion,MT.IdMedicamento,M.Nombre,MT.Cantidad,MT.Estado,M.Precio,M.Tipo,M.Detalle
        from medicamento M
        inner join medicamento_tratamiento MT
        on M.IdMedicamento = MT.IdMedicamento
        inner join detalle_atencion DA
        on MT.IdDetalle_Atencion = DA.idDetalle_Atencion
        where MT.idDetalle_Atencion = $idAtencion";
        $resultado =mysqli_query($conexion,$sql);
        return $resultado;
    }
    //Precio producto
    function precioCantidad($idAtencion,$nombre){
        global $conexion;
        $sql = "SELECT MT.idDetalle_Atencion,MT.IdMedicamento,M.Nombre,MT.Cantidad,MT.Estado,M.Precio,M.Tipo,M.Detalle
        from medicamento M
        inner join medicamento_tratamiento MT
        on M.IdMedicamento = MT.IdMedicamento
        inner join detalle_atencion DA
        on MT.IdDetalle_Atencion = DA.idDetalle_Atencion
        where MT.idDetalle_Atencion = $idAtencion and M.Nombre='$nombre'";
        $resultado =mysqli_query($conexion,$sql);
        return $resultado;
    }

//<-----------------------------------------------------PACIENTE----------------------------------------------------->
    //validar paciente
    function validarPaciente($correo,$contraseña){
        global $conexion;
        $sql="SELECT persona.idPersona
        from persona
        inner join usuario 
        on persona.idPersona = usuario.idPersona
        INNER join rol 
        on usuario.idRol=rol.idRol
        where rol.Tipo='PACIENTE' AND (Correo='$correo' AND Contraseña='$contraseña')AND(usuario.Estado='Habilitado')";
        $resultado = mysqli_query($conexion,$sql);
        return $resultado;
    }
    //listar Citas para escoger
    function listarCitasP(){
        global $conexion;
        $citas = "SELECT P.idPersona,P.Nombre, D.Dia, CONCAT(T.HoraInicio,' - ',T.HoraFin) AS HORA,E.Nombre_Especialidad
        from persona P inner join usuario U
        on P.idPersona=U.idPersona
        inner join rol R
        on U.idRol = R.idRol
        inner join especialidad E
        on U.idEspecialidad = E.idEspecialidad
        inner join usuario_horario UH
        on U.idUsuario = UH.idUsuario
        inner join turno T
        on UH.IdTurno = T.IdTurno
        inner join dia D
        on UH.IdHorario = D.IdHorario";  
        $resultado = mysqli_query($conexion,$citas);
        return $resultado;
    }
    function listarCitasPaci($q){
        global $conexion;
        $citas = "SELECT P.idPersona,P.Nombre, D.Dia, CONCAT(T.HoraInicio,' - ',T.HoraFin) AS HORA,E.Nombre_Especialidad
        from persona P inner join usuario U
        on P.idPersona=U.idPersona
        inner join rol R
        on U.idRol = R.idRol
        inner join especialidad E
        on U.idEspecialidad = E.idEspecialidad
        inner join usuario_horario UH
        on U.idUsuario = UH.idUsuario
        inner join turno T
        on UH.IdTurno = T.IdTurno
        inner join dia D
        on UH.IdHorario = D.IdHorario
        where ( P.idPersona LIKE '%$q%'  OR  P.Nombre LIKE '%$q%'  OR D.Dia LIKE '%$q%' 
        OR T.HoraInicio LIKE '%$q%'  OR T.HoraFin LIKE '%$q%'  OR E.Nombre_Especialidad 
        LIKE '%$q%' )";
        $resultado = mysqli_query($conexion,$citas);
        return $resultado;
    }
    //Listar citas ya registradas
    function citasPacienteP($id){
        global $conexion;
        $mostrar = "SELECT C.idCita,p.Nombre,e.Nombre_Especialidad,C.Precio,concat(C.Fecha_Programada,' | ',C.Hora_Programada) as Fecha,C.Estado
        from cita C inner join persona P 
        on C.CodDoctor = P.idPersona
        inner join usuario U
        on P.idPersona=U.idPersona
        inner join rol R
        on U.idRol = R.idRol
        inner join especialidad E
        on U.idEspecialidad = E.idEspecialidad
        where R.Tipo = 'MEDICO' and C.CodPaciente=$id and C.Estado<>'Cancelado' and C.Estado<>'Atendido'" ;
        $resultado = mysqli_query($conexion,$mostrar);
        return $resultado;
    }
    //Cancelar citas
    function updatePaciente($idCita,$id){
        global $conexion;
        $update="UPDATE cita 
        set Estado='Cancelado'
        where idCita = $idCita";
        if (mysqli_query($conexion,$update)){        
			header ("location:../../Vista/historialcitaspaciente.php?id=$id");
  
        }else{ 
            echo "La cancelación no se realizó"; 
            echo mysqli_error($conexion);
        }
    }

//<-----------------------------------------------------ENFERMERA----------------------------------------------------->
//Lista pendientes
function listaPendientesE(){
    global $conexion;
    $sql = "SELECT C.idCita, P1.Numero_Documento, P1.Nombre AS N1,P2.Nombre AS N2, CONCAT(C.Fecha_Programada,' | ',C.Hora_Programada)as FECHA, C.Estado
    from cita C inner join persona P1
    on C.CodPaciente = P1.idPersona
    inner join persona P2
    on C.CodDoctor = P2.idPersona
    where C.Estado<>'Cancelado' and C.Estado<>'Atendido'";
    $resultado =mysqli_query($conexion,$sql);
    return $resultado;
}
function listaPendientesEnfermera($q){
    global $conexion;
    $sql = "SELECT C.idCita, P1.Numero_Documento, P1.Nombre, CONCAT(C.Fecha_Programada,' | ',C.Hora_Programada)as FECHA, C.Estado
    from cita C inner join persona P1
    on C.CodPaciente = P1.idPersona
    inner join persona P2
    on C.CodDoctor = P2.idPersona
    where P2.idPersona=$id and C.Estado<>'Cancelado' and C.Estado<>'Atendido' 
    and ( C.idCita LIKE '%$q%'  OR  P1.Numero_Documento LIKE '%$q%'  OR P1.Nombre LIKE '%$q%' 
    OR C.Fecha_Programada LIKE '%$q%'  OR C.Hora_Programada LIKE '%$q%'  OR C.Estado 
    LIKE '%$q%'  )" ;
    $resultado =mysqli_query($conexion,$sql);
    return $resultado;
}

?>
