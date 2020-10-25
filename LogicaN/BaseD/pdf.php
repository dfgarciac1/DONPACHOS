<?php
 
//verifica si se ha hecho clic en el boton guardar
if(1==1){
  
  /*propiedades del archivo*/
  $archivo_nombre=$_FILES['archivo']['name'];
  $archivo_tipo = $_FILES['archivo']['type'];
  $archivo_temp = $_FILES['archivo']['tmp_name'];
  
  $servername = "localhost:3306";
  $database = "PHP";
  $username = "root";
  $password = "new_password";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $database) or die("Error en la conexion");
 
  //verificamos si no hay error en la conexion
  if(!$conn){
    $error= mysqli_error($conn);
    die("ERROR: ".$error["message"]);
  }
 
  //convertir la imagen en código binario
  $archivo_binario = (file_get_contents($archivo_temp));
	

  $sql = "INSERT INTO ARCHIVOS (NOMBRE, TIPO, ARCHIVO) VALUES (?, ?, ?)";	
	$stmt = mysqli_prepare($conn, $sql);
	
	$stmt->bind_param('sss', $archivo_nombre, $archivo_tipo, $archivo_binario);
	
	
	
	//ejecutamos la sentencia
  if(mysqli_stmt_execute($stmt)){
    echo "Ya guardamos el archivo en la base de datos<br/>
          &Uacute;ltimo id insertado: <a href='ver.php?id=". mysqli_stmt_insert_id($stmt)."'>". mysqli_stmt_insert_id($stmt)."</a>";
  }else{
    echo "Chanfle, hubo un problema y no se guardo el archivo. ". mysqli_stmt_error($stmt)."<br/>";
  }  
	
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
  
}
?>
 
 
 
<!--FORMULARIO-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
  </head>
  <body>
		<h3>Guardar un archivo en MySQL</h3>
    <form method="post" action="pdf.php" enctype="multipart/form-data">
      <input type="file" name="archivo" /><br/><br/>
      <input type="submit" name="btnGuardar" value="Guardar" />
    </form>
  </body>
</html>