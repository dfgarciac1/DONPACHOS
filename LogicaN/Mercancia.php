<?php




?>
<!DOCTYPE html>
<html>

<head>
    <title>Libreria don pacho</title>
    <link rel="stylesheet" href="Style/Style_e.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Spartan&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
</head>

<body>
    <nav>
      <li>
        <h3 href="PaginaPrincipal.html">Libreria Don Pacho</h3>
      
      </li>
      
        <ul>
            <input type="checkbox"
            class="checkbox" id="checkbox">
            <label for  ="checkbox" class="label">
                <i class="fas fa-moon"></i>
                <i class="fas fa-sun"></i>
                <div class="ball"></div>

            </label>
            <li><a href="#">Accion </a></li>
            <li><a href="#">Registrar Libros <i class="icon ion-md-arrow-dropdown"></i></a>
                <ul>
                    <li><a href="BaseD/index.php">Libros Física</a></li>
                    <li><a href="index.php">Libros Matemáticas </a></li>
                    <li><a href="index.php">Libros Cocina </a></li>
                </ul>
            </li>
            <li><a href="#">Quitar libros <i class="icon ion-md-arrow-dropdown"></i></a>
                <ul>
                    <li><a href="Fisica.html">Libros Física</a></li>
                    <li><a href="Matematicas.html">Libros Matemáticas </a></li>
                    <li><a href="#">Libros Cocina </a></li>
                </ul>
            </li>
            <li><a href="Registro.html">Registrarse</a></li>
            <li><a href="contacto.html">Contacto</a></li>
        </ul>
    </nav>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="Funciones/ModoDark.js"></script>
    

    
</body>
<hr>
<h1>

    
<div class="BUSCA">
<form action="Funciones/buscador.php" method="POST">
<input type ="text" name ="Buscar" placeholder="Buscar" class="SRC">
</form>
</div>

</script>
</html>

