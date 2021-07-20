<?php
    require_once('../../Modelo/Conexion/Conexion.php');
    $tipoExamen = $_POST['tipoExamen'];
    $sql2 = listarExamenM();
    $numeroSql = mysqli_num_rows($sql2);
    while($esp = mysqli_fetch_array($sql2)){
        if($tipoExamen == $esp['Tipo']){
            $idExamen=$esp['idExamen']; 
        }
    }
    $id=$_POST['id'];
    $fecha=$_POST['fecha'];
    $hora=$_POST['hora'];
    $prioridad=$_POST['prioridad'];
    $idCita=$_POST['idCita'];
    /*echo "$numeroSql <br>";
    echo "$tipoExamen <br>";
    echo "$fecha <br>";
    echo "$hora <br>";
    echo "$prioridad <br>";
    */
    registrarExamen($id,$idCita,$idExamen,$fecha,$hora,$prioridad);
    /*
    $descarte=$_GET['descarte'];
    $diagnostico=$_GET['diagnostico'];
    $tipotratamiento=$_GET['tipotratamiento'];
    $detallefinal=$_GET['detallefinal'];
    $fechain=$_GET['fechain'];
    $fechafint=$_GET['fechafint'];
    atenderCitaM($idCita,$id,$talla,$peso,$Presion,$temperatura,$sintomas,$detalle,$descarte,$diagnostico,$tipotratamiento,$detallefinal,$fechain,$fechafint);
    */
    //atenderCitaM($idCita,$id,$idPac,$talla,$peso,$Presion,$temperatura,$sintomas,$detalle);
?>