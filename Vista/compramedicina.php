<?php
require_once('../Controlador/Farmacia/listarPendientes.php');  //solo jala conexion
//include('../Controlador/Administrador/listamedico2.php');
    $idAtencion = $_POST["idDetalle_Atencion"];
    $sql = listarCompraF($idAtencion);


    if(isset($_POST['btnenviar'])){
      $arregloCHK = $_POST['arreglo'];
      $num = count($arregloCHK);
      $total =0;
      for($n=0;$n<$num;$n++){
        $sql=precioCantidad($idAtencion,$arregloCHK[$n]);
        while ( $row = mysqli_fetch_assoc($sql)){
          $total=$total+($row['Cantidad']*$row['Precio']);
        }
      }
    }
    
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

<div  id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5  id="exampleModalLabel">REGISTRAR LA COMPRA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div align="center">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">SELECCIONE MEDIO DE PAGO</label><br>
            <select>
            <option>TARJETA</option>
            <option>PAYPAL</option>
            <option>YAPE</option>
            <option>OTRO</option>
            </select> 
            <br>
            <label for="recipient-name" class="col-form-label">MONTO TOTAL</label><br>  
            <p><?php echo  $total ?></p>     
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
        <a href="adminfar.php"><button type="button" class="btn btn-primary">REGISTRAR PAGO</button></a>
      </div>
    </div>
  </div>
</div>      
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