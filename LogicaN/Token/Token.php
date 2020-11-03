<?php 

function generateSecureToken($length, $lengthType) {

    // Work out byte length
    switch($lengthType) {

        case 'bits':
            $byteLength = ceil($length / 8);
           
            break;

        case 'bytes':
            $byteLength = $length;
            break;

        case 'chars':
            $byteLength = $length / 2; // In hex one char = 4 bits, i.e. 2 chars per byte
            break;

        default:
            return false;
            break;

    }

    // Try getting a cryptographically secure token
    $token = openssl_random_pseudo_bytes($byteLength);
    

    if ($token !== false) {
        echo(" \n Este es su codigo conservelo ->"."  " .bin2hex($token));
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
 while($rows=mysqli_fetch_array($Resultado)){  
 if($conn->query($sql) == TRUE){
    echo("\n Registre  PUTO->");
    header( "refresh:2; url=http://localhost:3000/LogicaN/BaseD/lista.php" );
    echo ("<script>alert('Ahora vas  a ser redirigido a tu pdf en 2 segundos')</script>");
       exit;
     }
       else {
        header("Status: 301 Moved Permanently");
        header("Location: http://localhost:3000/Login_Error.html"); 
        
 }
    }
       

mysqli_close($conn);
        
       

    }
    else {

        return false;

    }

}

var_dump(generateSecureToken(128, 'bits'));          //  "19e25e5adc713560728587beab0208c6" (128-bit)
 
?>

