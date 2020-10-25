<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
    
    <title>Libreria don pacho</title>
    <link rel="stylesheet" href="Styles/Estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Spartan&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
</head>

        <title></title>
    </head>
    <body>
        <table>
            <tr>
                <td>Titulo</td>
                <td>Descripcion</td>
                <td>Tamaño</td>
                <td>Tipo</td>
                <td>Nombre</td>
            </tr>
        <?php
        include 'config.inc.php';
        $db=new Conect_MySql();
            $sql = "select*from tbl_documentos";
            $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr> 
                <td><?php echo $datos['titulo']; ?></td>
                <td><?php echo $datos['descripcion']; ?></td>
                <td><?php echo $datos['tamanio']; ?></td>
                <td><?php echo $datos['tipo']; ?></td>
                <td><a href="archivo.php?id=<?php echo $datos['id_documento']?>"><?php echo $datos['nombre_archivo']; ?></a></td>
            </tr>
                
          <?php  } ?>
          <b onclick="window.location = 'http://192.168.1.8:8000/LogicaN/Mercancia.html'" target="_new" href="http://192.168.1.8:8000/LogicaN/Mercancia.html">Pagina</b>

        </table>
      
    </body>
</html>
