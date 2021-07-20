<?php
    $id = $_GET["id"];
?>
<!DOCTYPE html PUBLIC  "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtmll/DTD/xhtmll-transitional,dtd
    <html xmlns="https://www.w3.org/1999/xhtml">
<head>
    <title>MEDICO CUENTA</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link href="css/css.css" rel="stylesheet" type="text/css"/>
</head>
<body>       
    <!-- CABECERA -->
	<?php 
        require_once('headerDoctor.php');
    ?>
    <center><img src="img/doctor.jpg"  height="25%" width="25%"></center>
    
    </body>
    <?php 
    require_once('footer.php');
    ?>

</html>
