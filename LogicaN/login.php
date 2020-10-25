
<?php


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width,initial-scale=1.0">
    <title>Libreria don pacho</title>
    <link rel="stylesheet" href="a/c.css">
    <link href="https://fonts.googleapis.com/css2?family=Spartan&display=swap" rel="stylesheet">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1' name='viewport'/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" /><link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
</head>

<body >
    
    <nav >
        <li><a href="Registro.html">Registrarse</a></li>
     
         <form action="BaseD/b.php" method="GET"  id="form">
              <div class="form">
                  <h1> Login</h1>
                  <div  class ="Grupo">
                      Nombre: <input type ="text" name= "Nombre", id="name" required>
                      <span class="barra">
                      </span>

              </div>
       
                <div  class ="Grupo">
                    correo:<input type ="text" name= "correo", id="name" required>
                    <span class="barra">
                    </span>

             </div>
                <div  class ="Grupo">
                    pass:<input type ="password" name= "pass", id="name" required>
                    <span class="barra">
                    </span>
                    </label>

             </div>
             <button type ="submit"> Siguiente </button>
            </div>
            <div class="container">
   <div class="panel panel-default">
   <?php
   if($login_button == '')
   {
    echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
    echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
    echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
    echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
    echo '<h3><a href="logout.php">Logout</h3></div>';
   }
   else
   {
    echo '<div align="center">'.$login_button . '</div>';
   }
   ?>
   </div>
  </div>
          </form> 
   
  </nav>
</body>

</html>