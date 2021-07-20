<?php
	$servername = "localhost";
    $username = "root";
  	$password = "";
  	$dbname = "utpclinica";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }
    $query = "SELECT persona.idPersona,persona.Numero_Documento,persona.Nombre,persona.Celular,usuario.Correo,usuario.Contraseña,usuario.Estado  
    from persona inner join usuario 
    on persona.idPersona=usuario.idPersona
    inner join rol 
    on usuario.idUsuario=rol.idUsuario
    where rol.Tipo='PACIENTE' ";

    if (isset($_POST['consulta'])) {

        $q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT persona.idPersona,persona.Numero_Documento,persona.Nombre,persona.Celular,usuario.Correo,usuario.Contraseña,usuario.Estado  
        from persona inner join usuario 
        on persona.idPersona=usuario.idPersona
        inner join rol 
        on usuario.idUsuario=rol.idUsuario
        where rol.Tipo='PACIENTE' and ( persona.idPersona LIKE '%$q%' OR  persona.Numero_Documento LIKE '%$q%' OR persona.Nombre LIKE '%$q%' 
		OR persona.Celular LIKE '%$q%' OR usuario.Correo LIKE '%$q%' OR usuario.Contraseña 
		LIKE '%$q%' OR usuario.Estado LIKE '%$q%' ) ";

    }
	$resultado = $conn->query($query);
if ($resultado->num_rows>0) {?>
    <table border=1 class='tabla_datos'>
            <thead>
                <tr id='titulo'>
                    <td>Num de documento</td>
                    <td>Nombre</td>
                    <td>Celular</td>
                    <td>Correo</td>
                    <td>Contraseña</td>
                    <td>Estado</td>
                    <td>Operacion</td>
                </tr>

            </thead>          
    <tbody>
<?php
    while ($fila = $resultado->fetch_assoc()) {?>
        <tr>
                    <td><?php echo $fila['Numero_Documento']?></td>
                    <td><?php echo $fila['Nombre']?></td>
                    <td><?php echo $fila['Celular']?></td>
                    <td><?php echo $fila['Correo']?></td>
                    <td><?php echo $fila['Contraseña']?></td>
                    <td><?php echo $fila['Estado']?></td>    
                    <td><a href="editardoctor.php?id=<?php echo $fila["idPersona"];?>" 
                    >Editar</a></td>
        </tr>
    
    <?php } mysqli_free_result($resultado);
}else{
    echo    "NO HAY DATOS,INTENTELO DE NUEVO";
}
$conn->close();
?>