<html>
 <head>
 </head>
 <body>
 <?php  
  $servername = "localhost:3306";
  $database = "PHP";
  $username = "root";
  $password = "new_password";
  // Create connection
$conn = mysqli_connect($servername, $username, $password,   $database) or die("Error en la conexion");
   $Nombre=$_GET['Nombre'];
   $correo=(string)$_GET['correo'];
   $pass=$_GET['pass'];
   $sql = "INSERT INTO Usuario (nombre, mail, pass)
	VALUES ('$Nombre', '$correo' ,'$pass')";
  if ($conn->query($sql) == TRUE) {
	  header("Location: http://localhost:3000/LogicaN/PaginaPrincipal.html");
     exit;
	  } else {
      echo "El usuario ya esta registrado sera redireccionado";
      echo "<script>setTimeout(\"location.href = 'http://localhost:3000/LogicaN/Registro.html';\",1500);</script>";
     
	}
 
mysqli_close($conn);
?>
 </body>
</html>

