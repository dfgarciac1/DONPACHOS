 <html>
 <body>
 <head>
    <title>Libreria don pacho</title>
    <link rel="stylesheet" href="e.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Spartan&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
</head>
 <?php  
   $servername = "localhost:3306";
   $database = "PHP";
   $username = "root";
   $password = "new_password";
   // Create connection
   $conn = mysqli_connect($servername, $username, $password, $database) or die("Error en la conexion");

  $Buscar=$_POST['Buscar'];

  $SQL_READ = "SELECT * FROM Usuario where nombre = '$Buscar' ";
  $result = mysqli_query($conn, $SQL_READ);
  $total = mysqli_num_rows($result);

  while($rows=mysqli_fetch_array($result)){
     echo "Nombre "." ".$rows[0]."<br>";
     echo "Email"." ".$rows[1]."<br>";
    }
    if($total==0){
        echo "No se encuentran resutados";
    }
?>

</body>

</html>
