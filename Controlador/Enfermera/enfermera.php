<?php  
    require_once('../Modelo/Conexion/Conexion.php');
    $nombre=$_POST['nombre'];
    $DNI=$_POST['DNI'];
    $talla=$_POST['talla'];
    $peso=$_POST['peso'];
    $presion=$_POST['presion'];
    $temperatura=$_POST['temperatura'];

    $sql="SELECT *
    from persona P inner join usuario U
    on P.idPersona = U.idPersona
    INNER JOIN rol R
    ON U.idRol = R.idRol
    where P.Numero_Documento = $DNI and R.Tipo = 'PACIENTE'"

    
?>
