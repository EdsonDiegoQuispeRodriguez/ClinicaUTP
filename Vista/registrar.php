<?php
    require_once('../Controlador/Paciente/listarCitas.php');
    $id = $_GET["id"];
    $sql = listarCitas();
    $numeroSql = mysqli_num_rows($sql);
?>
<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional,dtd
    <html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <link href="css/css.css" rel="stylesheet" type="text/css"/> 
    <link href="css/estiloscita.css" rel="stylesheet" type="text/css"/>
    <title>REGISTRAR CITA</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    
    <script
	src="https://code.jquery.com/jquery-3.3.1.min.js"
	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
	
</head>
<body>       
	<!-- CABECERA -->
    <?php 
        require_once('headerPaciente.php');
    ?>	
        <form id="form2" name="form2" method="POST" action="registrar.php?id=<?php echo $id;?>">
                <div>
                        <div>
                                <center><label  class="form-label">DATO A BUSCAR</label><br><br>
                                <input type="text" id="buscar" name="buscar" class="form-control" value=""></center>
                        </div>
                        <div>
                                <center>       
                                <input type="submit" class="btn btn-success" value="BUSCAR" name="BUSCAR" style="margin-top: 30px;">
                                <input type="submit" class="btn btn-success" value="RESTABLECER" style="margin-top: 30px;"></center>
                        </div>
                </div>
                <center><p style="font-weight: bold; color:green;"><i class="mdi mdi-file-document"></i> <?php echo $numeroSql; ?> RESULTADOS ENCONTRADOS</p></center>
        </form>
<div class="table-responsive">
        <table class="table">
                <thead class="text-center">
                        <tr class="bg-success">
                                <th class="text-white"> NOMBRE MEDICO </th>
                                <th class="text-white"> ESPECIALIDAD </th>
                                <th class="text-white"> DIA </th>
                                <th class="text-white"> HORA INICIO-FIN </th>
                                <th class="text-white"> ACCION </th>

                        </tr>
                </thead>
                <tbody>
                        <?php while ($row = mysqli_fetch_assoc($sql)){ ?>

                        <tr style="text-transform:uppercase"  onkeyup="this.value=this.value.toUpperCase()">
                                <td style="display:none;"><?php $row['idPersona']?></td>
                                <td style="text-align: center;"><?php echo $row["Nombre"] ?></td>
                                <td style="text-align: center;"><?php echo $row["Nombre_Especialidad"]; ?></td>
                                <td style="text-align: center;"><?php echo $row["Dia"]; ?></td>
                                <td style=" text-align: center;"><?php echo $row["HORA"]; ?></td>
                                <td style=" text-align: center;"><a href="../Controlador/Paciente/insertarcita.php?idDoc=<?php echo $row["idPersona"];?>&dia=<?php echo $row["Dia"];?>&idPac=<?php echo $id;?>">REGISTRAR CITA</a><td>
                        </tr>
                        <?php } mysqli_free_result($sql);?>
                </tbody>
        </table>
</div>    
</body>
    <br>
	<?php 
    require_once('footer.php');
    ?>
</html>
