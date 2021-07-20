<?php
    require_once('../Controlador/Medico/listarAtendidos.php');
    $id = $_GET["id"];
    $idCita = $_GET["idCita"];
    $idDetalle_Atencion = $_GET["idAtencion"];
    $idExamen = $_GET["idExamen"];
    $sql = verResultados($idDetalle_Atencion,$idExamen);
    //Controlador/Medico/ATENCION.php --->listaatendidos.php
?>
<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional,dtd
    <html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <title>AÑADIR ATENCION</title>
    <link href="bootstrap4/css/bootstrap.min.css" rel="stylesheet" >	    
    <link href="bootstrap5/css/bootstrap.min.css" rel="stylesheet" >

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link href="css/css.css" rel="stylesheet" type="text/css"/>
</head>
<body>       
    <!-- CABECERA -->
	<?php 
    require_once('headerDoctor.php');
    ?>
    
    <fieldset  id="datos_personales">
        <legend><h1>Resultados de los Analisis</h1></legend>    
        <h4>Detalle de ANALISIS</h4>
        <?php while ( $row = mysqli_fetch_assoc($sql)){ ?>
        <center><textarea id="w3review" name="detalle" rows="10" cols="150" disabled><?php echo $row["Detalle"];?></textarea></center>
        <?php } mysqli_free_result($sql);?>
    </fieldset><br><br><br>
    <div class="btn__form">
       <a href = "analisis.php?id=<?php echo $id;?>&idCita=<?php echo $idCita;?>"><button class="btn btn-primary" type="button" >REGRESAR</button></a>
</div>
    </body>
    <br>
    <br>
    <br>
    <footer  class="f">
        <center><p>           
            @2021 Clinica de salud UTP</p></center>
    </footer>

</html>