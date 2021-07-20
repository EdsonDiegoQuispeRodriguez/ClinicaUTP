<?php
require_once('../Controlador/Farmacia/listarPendientes.php');
$sql = listarPendientesFarm();
$numeroSql = mysqli_num_rows($sql);
?>
<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional,dtd
    <html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <title>ATENDER FARMACIA </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link href="css/css.css" rel="stylesheet" type="text/css"/>
    <link href="bootstrap4/css/bootstrap.min.css" rel="stylesheet" >	    
    <link href="bootstrap5/css/bootstrap.min.css" rel="stylesheet" >  
</head>
<body>       
    <!-- CABECERA -->
	  <?php 
      require_once('headerFarmaceutico.php');
    ?>
                                        <div class="table-responsive">
                                                <table class="table">
                                                <thead class="text-center">
                                                    <tr class="bg-success">
                    <td class="text-white">NUMERO DE DOCUMENTO</td>
                    <td class="text-white">NOMBRE</td>
                    <td class="text-white">CORREO</td>
                    <td class="text-white">ESTADO</td>
                    <td class="text-white">OPERACION</td>
                </tr>

            </thead>          
            <tbody>
                                <?php while ( $row = mysqli_fetch_assoc($sql)){ ?>

                                        <tr style="text-transform:uppercase"  onkeyup="this.value=this.value.toUpperCase()">
                                                <td style="text-align: center;"><?php echo $row['Numero_Documento'];?></td>
                                                <td style="text-align: center;"><?php echo $row['Nombre'];?></td>
                                                <td style="text-align: center;"><?php echo $row['Correo_Electronico'];?></td>
                                                <td style="text-align: center;"><?php echo $row['Estado'];?></td>
                                                <td style="text-align: center;"><a class="table__item__link" href="compra.php?idAtencion=<?php echo $row['idDetalle_Atencion'];?>">Atender</a></td>
                                        </tr>

                                <?php } mysqli_free_result($sql);?>
                        </tbody>
                                </table>
</div>    
      
      
</div>        
      
    <script src="jquery/jquery-3.3.1.min.js"></script>	 	
    <script src="popper/popper.min.js"></script>	 	 	
    <script src="bootstrap4/js/bootstrap.min.js"></script>   	
    <script src="jqueryUI/jquery-ui-1.12.1/jquery-ui.min.js"></script> 
        </form >
        <?php 
    require_once('footer.php');
    ?>
    </body>
    <br>
    
</html>
