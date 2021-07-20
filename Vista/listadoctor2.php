<?php
require_once('../Controlador/Administrador/listarDoctor.php');
$id = $_GET["id"];
$sql = listarDoctor();
$numeroSql = mysqli_num_rows($sql);
?>
<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional,dtd
    <html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <title>ADMINISTRAR DOCTOR</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link href="css/css.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">	  
    <link href="bootstrap4/css/bootstrap.min.css" rel="stylesheet" >	    
    <link href="bootstrap5/css/bootstrap.min.css" rel="stylesheet" >

</head>
<body>       
    <!-- CABECERA -->
    <?php 
        require_once('headerAdministrador.php');
    ?>	

        
    <br><br>
    <div align="center">
        <a href="añadirdoctor.php?id"><button type="submit" class="btn btn-link">AÑADIR NUEVO USUARIO</button></a>
    </div>
        <br>

        <form id="form2" name="form2" method="POST" action="listadoctor2.php?id=<?php echo $id;?>">
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
                                <th class="text-white"> N° DOCUMENTO </th>
                                <th class="text-white"> NOMBRE </th>
                                <th class="text-white"> ROL </th>
                                <th class="text-white"> ESPECIALIDAD </th>
                                <th class="text-white"> CORREO </th>
                                <th class="text-white"> CONTRASEÑA </th>
                                <th class="text-white"> ESTADO </th>
                                <th class="text-white"> ACCION </th>

                        </tr>
                </thead>
                <tbody>
                        <?php while ($rowSql = mysqli_fetch_assoc($sql)){ ?>

                        <tr style="text-transform:uppercase"  onkeyup="this.value=this.value.toUpperCase()">
                                <td style="display:none;"><?php echo $rowSql['idPersona']?></td>
                                <td style="text-align: center;"><?php echo $rowSql["Numero_Documento"] ?></td>
                                <td style="text-align: center;"><?php echo $rowSql["Nombre"]; ?></td>
                                <td style="text-align: center;"><?php echo $rowSql["Tipo"]; ?></td>
                                <td style="text-align: center;"><?php echo $rowSql["Nombre_Especialidad"]; ?></td>
                                <td style=" text-align: center;"><?php echo $rowSql["Correo"]; ?></td>
                                <td style=" text-align: center;"><?php echo $rowSql["Contraseña"]; ?></td>
                                <td style=" text-align: center;"><?php echo $rowSql["Estado"]; ?></td>
                                <td style=" text-align: center;"><a href="editardoctor.php?idDoctor=<?php echo $rowSql['idPersona']?>&idAdmin=<?php echo $id?>">EDITAR</a></td>  
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