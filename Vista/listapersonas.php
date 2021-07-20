<?php
require_once('../Controlador/Medico/listarPendientes.php');
$id = $_GET["id"];
$sql = listarPendientes($id);
$numeroSql = mysqli_num_rows($sql);
?>
<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional,dtd
    <html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <title>HISTORIAL CITAS PACIENTE</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link href="css/css.css" rel="stylesheet" type="text/css"/>
</head>
<body>       
    <!-- CABECERA -->
    <?php 
        require_once('headerDoctor.php');
    ?>
    <br><br><br>
<form id="form2" name="form2" method="POST" action="pendientes.php?id=<?php echo $id;?>">
                                <center><label  class="form-label">DATO A BUSCAR</label></center>
                        <div align=center> 

                                <input type="text" id="buscar" name="buscar" style="width:600px;"><br>
                                <input type="submit" class="btn btn-success" value="BUSCAR" name="BUSCAR" style="margin-top: 30px;">
                                <input type="submit" class="btn btn-success" value="RESTABLECER" style="margin-top: 30px;">
                        </div>
                <center><p style="font-weight: bold; color:green;"><i class="mdi mdi-file-document"></i> <?php echo $numeroSql; ?> RESULTADOS ENCONTRADOS</p></center>
        </form>
<input class="text-center" style="border: 0;" name="Estado"><a href="tratarpaciente.php"><button type="submit" class="btn btn-link">MEDICAR</button></a>|<a href="registroanalisis.php"><button type="submit" class="btn btn-link">GESTIONAR ANALISIS</button></a>
<div class="table-responsive">
        <table class="table">
                <thead class="text-center">
                        <tr class="bg-success">
                                <th class="text-white"> N°</th>
                                <th class="text-white"> NUM DOCUMENTO </th>
                                <th class="text-white"> NOMBRE PACIENTE </th>
                                <th class="text-white"> FECHA REGISTRADA </th>
                                <th class="text-white"> ESTADO </th>
                                <th class="text-white"> ACCION </th>

                        </tr>
                </thead>
                <tbody>
                        <?php while ( $row = mysqli_fetch_assoc($sql)){ ?>

                        <tr style="text-transform:uppercase"  onkeyup="this.value=this.value.toUpperCase()">
                                <td style="text-align: center;"><?php echo $row["idCita"];?></td>
                                <td style="display:none;"><?php echo $rowSql['codPac']?></td>
                                <td style="text-align: center;"><?php echo $row["Numero_Documento"];?></td>
                                <td style="text-align: center;"><?php echo $row["Nombre"];?></td>
                                <td style=" text-align: center;"><?php echo $row["FECHA"];?></td>
                                <td style=" text-align: center;"><?php echo $row["Estado"];?></td>
                                <td style=" text-align: center;"><a href="../Controlador/Medico/deletecita2.php?idCita=<?php echo $row["idCita"];?>&id=<?php echo $id; ?>" class="table__item__link">Cancelar</a> |
                <a href="GenerarHistorial.php?idCita=<?php echo $row["idCita"];?>&id=<?php echo $id; ?>&idPac=<?php echo $row["codPac"];?>" class="table__item__link">Atender</a></td>  
                

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