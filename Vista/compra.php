<?php
require_once('../Controlador/Farmacia/listarPendientes.php');  //solo jala conexion
//include('../Controlador/Administrador/listamedico2.php');
    $idAtencion = $_GET["idAtencion"];
    $sql = listarCompraF($idAtencion);
    
?>
<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional,dtd
    <html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <title>ADMINISTRAR LISTA </title>
    <link href="css/css.css" rel="stylesheet" type="text/css"/>
    <link href="bootstrap4/css/bootstrap.min.css" rel="stylesheet" >	    
    <link href="bootstrap5/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>       
    <!-- CABECERA -->
	  <?php 
    require_once('headerFarmaceutico.php');
    ?>
<center><h1>COMPRANDO MEDICAMENTOS</h1></center>
<form id="form2" name="form2" method="POST" action="compramedicina.php">
                                                <table class="table">
                                                <thead class="text-center">
                                                    <tr class="bg-success">
                                                        <th class="text-white">LISTA DE MEDICAMENTOS</th>
                                                        <th class="text-white">PRESENTACION</th>
                                                        <th class="text-white">DETALLE</th>
                                                        <th class="text-white">CANTIDAD</th>
                                                        <th class="text-white">PRECIO POR UNIDAD</th>
                                                    </tr>
                                                    </thead>  
                                                    <tbody>
                                                          <?php while ( $row = mysqli_fetch_assoc($sql)){ ?>
                                                        <tr style="text-transform:uppercase"  onkeyup="this.value=this.value.toUpperCase()">
                                                        <td style="text-align: center;"><center><input type="checkbox" class="form-check-input" name="arreglo[]" value="<?php echo $row['Nombre'];?>"><?php echo $row['Nombre'];?></input></center></td>
                                                        <td style="display:none;"><center><input value ="<?php echo $row['idDetalle_Atencion'];?>"name="idDetalle_Atencion"></input></center></td>
                                                        <td style="text-align: center;"><center><?php echo $row['Tipo'];?></center></td>
                                                        <td style="text-align: center;"><center><?php echo $row['Detalle'];?></center></td>
                                                        <td style="text-align: center;"><center><?php echo $row['Cantidad'];?></center></td>
                                                        <td style="text-align: center;"><center><?php echo $row['Precio'];?></center></td>
                                                        </tr>   

                                                          <?php } mysqli_free_result($sql);?>
                                                    </tbody>
                                                
                                                
                                                </table>
                                        </div>

                                </div>
                        </div>
    
    </body>
    <div class="d-grid gap-2">
      <input class="btn btn-primary" type="submit" name ="btnenviar" value="REALIZAR COMPRA"></input>
</div>
</form>
<script src="jquery/jquery-3.3.1.min.js"></script>	 	
    <script src="popper/popper.min.js"></script>	 	 	
    <script src="bootstrap4/js/bootstrap.min.js"></script>   	
    <script src="jqueryUI/jquery-ui-1.12.1/jquery-ui.min.js"></script>  </td>
      
</div>        
    </div>    
    <br>
</html>
<?php 
    require_once('footer.php');
    ?>