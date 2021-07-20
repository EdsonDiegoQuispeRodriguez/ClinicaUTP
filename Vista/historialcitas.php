<?php
    		$dbhost= "localhost";
            $dbuser= "root";
            $dbpass= "";
            $dbname= "utpclinica";
        $id = $_GET["id"];
    $conexion = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    error_reporting(0);
    ?>
<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional,dtd
    <html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <title>ADMINISTRAR DOCTOR</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link href="css/css.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">	  
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >
<script src="bootstrap/js/bootstrap.bundle.min.js" ></script>
<script src="bootstrap/js/bootstrap.min.js" ></script>    

</head>
<body>       
    <!-- CABECERA -->
    <?php 
        require_once('headerAdministrador.php');
    ?>	


    <br><br>
<br>

<form id="form2" name="form2" method="POST" action="historialcitas.php">
                                                <div>
                                                        <div>
                                                        <center><label  class="form-label">DATO A BUSCAR</label><br><br>
                                                        <input type="text" id="buscar" name="buscar" class="form-control" value=""></center>
                                                        </div>
                                                        <div>
                                                         <center>       
                                                        <input type="submit" class="btn btn-success" value="BUSCAR" style="margin-top: 30px;">
                                                        <input type="submit" class="btn btn-success" value="RESTABLECER" style="margin-top: 30px;"></center>
                                                        </div>
                                                </div>

                                                <?php 
                                                $sql = mysqli_query($conexion,"SELECT persona.idPersona,persona.Numero_Documento,persona.Nombre,persona.Celular,usuario.Correo,usuario.Contraseña,usuario.Estado  
                                                from persona inner join usuario 
                                                on persona.idPersona=usuario.idPersona
                                                inner join rol 
                                                on usuario.idUsuario=rol.idUsuario
                                                where rol.Tipo='PACIENTE' and ( persona.idPersona LIKE '%".$_POST["buscar"]."%'  OR  persona.Numero_Documento LIKE '%".$_POST["buscar"]."%'  OR persona.Nombre LIKE '%".$_POST["buscar"]."%' 
                                                OR persona.Celular LIKE '%".$_POST["buscar"]."%'  OR usuario.Correo LIKE '%".$_POST["buscar"]."%'  OR usuario.Contraseña 
                                                LIKE '%".$_POST["buscar"]."%'  OR usuario.Estado LIKE '%".$_POST["buscar"]."%' )" );
                                                $numeroSql=mysqli_num_rows($sql);
                                                ?>
                                                <center><p class="text-success"><i class="mdi mdi-file-document"></i> <?php echo $numeroSql; ?> RESULTADOS ENCONTRADOS </p><center>
                                        </form>


                                        <div class="table-responsive">
                                                <table class="table">
                                                        <thead class="text-center">
                                                                <tr class="bg-success">
                                                                        <th class="text-white"> NOMBRE PACIENTE </th>
                                                                        <th class="text-white"> NOMBRE DOCTOR </th>
                                                                        <th class="text-white"> ESPECIALIDAD </th>
                                                                        <th class="text-white"> PRECIO </th>
                                                                        <th class="text-white"> FECHA PROGRAMADA </th>
                                                                        <th class="text-white"> ESTADO </th>
                                                                        
                                                                </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php while ($rowSql = mysqli_fetch_assoc($sql)){ ?>
                                                
                                                                <tr style="text-transform:uppercase"  onkeyup="this.value=this.value.toUpperCase()">
                                                                <td style=display:none;><?php $rowSql['idPersona']?></td>
                                                                <td style="text-align: center;"><?php echo $rowSql["Nombre"] ?></td>
                                                                <td style="text-align: center;"><?php echo $rowSql["Nombre"]; ?></td>
                                                                <td style="text-align: center;"><?php echo $rowSql["Celular"]; ?></td>
                                                                <td style=" text-align: center;"><?php echo $rowSql["Correo"]; ?></td>
                                                                <td style=" text-align: center;"><?php echo $rowSql["Contraseña"]; ?></td>
                                                                <td style=" text-align: center;"><?php echo $rowSql["Estado"]; ?></td> 
                                                                </tr>
                                                
                                                <?php } ?>
                                                        </tbody>
                                                </table>
                                        </div>


                                </div>
                        </div>
    </body>
    <br>
    <?php 
    require_once('footer.php');
    ?>