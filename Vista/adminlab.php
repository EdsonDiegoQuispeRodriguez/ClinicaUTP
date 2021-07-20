<?php
require_once('../Controlador/Laboratorio/listarPendientes.php');
$sql = listarPendientesLab();
$numeroSql = mysqli_num_rows($sql);
?>
<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional,dtd
    <html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <title>HISTORIAL CITAS PACIENTE</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link href="css/css.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">	        
    <link rel="stylesheet" href="bootstrap5/css/bootstrap.min.css">	    
</head>
<body>       
    <!-- CABECERA -->
    <?php 
        require_once('headerLaboratorio.php');
    ?>
     
      
    <script src="jquery/jquery-3.3.1.min.js"></script>	 	
    <script src="popper/popper.min.js"></script>	 	 	
    <script src="bootstrap4/js/bootstrap.min.js"></script>   	
    <script src="jqueryUI/jquery-ui-1.12.1/jquery-ui.min.js"></script>  
   
    <script src="codigo.js"></script> 	  
    </body>
    <br>
    <br>
    <br>
    <form id="form2" name="form2" method="POST" action="adminlab.php">
                                <center><label  class="form-label">DATO A BUSCAR</label></center>
                        <div align=center> 

                                <input type="text" id="buscar" name="buscar" style="width:600px;"><br>
                                <input type="submit" class="btn btn-success" value="BUSCAR" name="BUSCAR" style="margin-top: 30px;">
                                <input type="submit" class="btn btn-success" value="RESTABLECER" style="margin-top: 30px;">
                        </div>
                <center><p style="font-weight: bold; color:green;"><i class="mdi mdi-file-document"></i> <?php echo $numeroSql; ?> RESULTADOS ENCONTRADOS</p></center>
        </form>
        <div class="table-responsive">
                <table class="table">
                        <thead class="text-center">
                                <tr class="bg-success">
                                        <th class="text-white"> PACIENTE </th>
                                        <th class="text-white"> TIPO EXAMEN </th>
                                        <th class="text-white"> FECHA PROGRAMADA </th>
                                        <th class="text-white"> HORA </th>
                                        <th class="text-white"> PRECIO </th>
                                        <th class="text-white"> ESTADO </th>
                                        <th class="text-white"> PRIORIDAD </th>
                                        <th class="text-white"> ACCION </th>
                                        
                                </tr>
                        </thead>
                        <tbody>
                                <?php while ( $row = mysqli_fetch_assoc($sql)){ ?>

                                        <tr style="text-transform:uppercase"  onkeyup="this.value=this.value.toUpperCase()">
                                                <td style="text-align: center;"><?php echo $row['Nombre'];?></td>
                                                <td style="text-align: center;"><?php echo $row['Tipo'];?></td>
                                                <td style="text-align: center;"><?php echo $row['Fecha'];?></td>
                                                <td style="text-align: center;"><?php echo $row['Hora'];?></td>
                                                <td style="text-align: center;"><?php echo $row['Precio'];?></td>
                                                <td style="text-align: center;"><?php echo $row['Estado'];?></td>
                                                <td style="text-align: center;"><?php echo $row['Prioridad'];?></td>
                                                <td style="text-align: center;"><a class="table__item__link" href="atenderLab.php?idDA=<?php echo $row['idDetalle_Atencion'];?>&idExamen=<?php echo $row['IdExamen'];?>">Atender</a></td>
                                        </tr>

                                <?php } mysqli_free_result($sql);?>
                        </tbody>
                </table>
        
    </div> 
        <?php 
    require_once('footer.php');
    ?>
</html>