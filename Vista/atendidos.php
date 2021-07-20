<?php
require_once('../Controlador/Medico/listarAtendidos.php');
$id = $_GET["id"];
$sql = listarAtendidos($id);
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
    <br><br>
    <div align=center>
    <a href="pendientes.php?id=<?php echo $id; ?>"><button  class="btn btn-primary" style="width:500px;">PENDIENTES</button></a>
    <a href="atendidos.php?id=<?php echo $id; ?>"><input type="button" style="width:500px;" class="btn btn-primary" value="ATENDIDOS"></a>
    </div>

<form id="form2" name="form2" method="POST" action="pendientes.php?id=<?php echo $id;?>">
                <div>
                        <div>
                                <center><label  class="form-label">DATO A BUSCAR</label><br><br>
                                <input type="text" id="buscar" name="buscar"style="width:600px;" value=""></center>
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
                                <th class="text-white"> N°</th>
                                <th class="text-white"> NUM DOCUMENTO </th>
                                <th class="text-white"> NOMBRE PACIENTE </th>
                                <th class="text-white"> DIA|HORA PROGRAMADA </th>
                                <th class="text-white"> ESTADO </th>
                                <th class="text-white"> ACCION </th>

                        </tr>
                </thead>
                <tbody>
                        <?php while ( $row = mysqli_fetch_assoc($sql)){ ?>

                        <tr style="text-transform:uppercase"  onkeyup="this.value=this.value.toUpperCase()">
                                <td style="text-align: center;"><?php echo $row["idCita"];?></td>
                                <td style="display:none;"><?php echo $rowSql['codPac'];?></td>
                                <td style="text-align: center;"><?php echo $row["Numero_Documento"];?></td>
                                <td style="text-align: center;"><?php echo $row["Nombre"];?></td>
                                <td style=" text-align: center;"><?php echo $row["FECHA"];?></td>
                                <td style=" text-align: center;"><?php echo $row["Estado"];?></td>
                                <td style=" text-align: center;"><a href="medicar.php?id=<?php echo $id; ?>&idCita=<?php echo $row["idCita"]; ?>" class="table__item__link">MEDICAR</a> |
                <a href="analisis.php?id=<?php echo $id; ?>&idCita=<?php echo $row["idCita"]; ?>" class="table__item__link">GESTION ANALISIS</a></td>  
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