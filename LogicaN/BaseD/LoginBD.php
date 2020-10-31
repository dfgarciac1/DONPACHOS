
 <?php 

 $servername = "localhost:3306";
 $database = "PHP";
 $username = "root";
 $password = "new_password";
 // Create connection
  $conn = mysqli_connect($servername, $username, $password, $database) or die("Error en la conexion");
  $Nombre=$_GET['Nombre'];
  $correo=(string)$_GET['correo'];
  $pass=$_GET['pass'];
  $sql ="SELECT * FROM Usuario where  Nombre='$Nombre'
   and mail='$correo'and pass='$pass' ";
   $Resultado= mysqli_query($conn,$sql);
   $filas=mysqli_num_rows($Resultado);
   $Inicio=$conn->query($sql) == TRUE;
   $Logea=False;
  while($rows=mysqli_fetch_array($Resultado))
  {
  if($rows[0]=='a' && $rows[1]=='a' && $rows[2]=='a'){
   header("Status: 301 Moved Permanently");
   header("Location: http://localhost:3000/LogicaN/Mercancia.php
   ");
   
  }
  else  
  if( $Inicio==true){
   
      header("Status: 301 Moved Permanently");
       header("Location: http://localhost:3000/LogicaN/PaginaPrincipal.html");
       return $Logea=True;
        exit;
      }
        else {
         header("Status: 301 Moved Permanently");
         header("Location: http://localhost:3000/Login_Error.html"); 
         
  }
     }
        
 
   
   
	
mysqli_close($conn);
    
?>


