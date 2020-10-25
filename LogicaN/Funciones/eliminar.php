<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once 'config.inc.php';
if (isset($_POST['Borrar'])) {
    $nombre = $_FILES['archivo']['name'];
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
            $titulo= $_POST['titulo'];
            $descri= $_POST['descripcion'];
            $db=new Conect_MySql();
            $sql = "DELETE FROM tbl_documentos WHERE (`id_documento` = '9');
            ";
            $query = $db->execute($sql);
            if($query){
                echo "Se guardo correctamente";
            }
        } else {
            echo "Error";
        }
    }
}
?>

<html>
    <head>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width,initial-scale=1.0">
    <title>Libreria don pacho</title>
    <link rel="stylesheet" href="c.css">
    <link href="https://fonts.googleapis.com/css2?family=Spartan&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
</head>

        <title></title>
    </head>
    <body>
        <div style="width: 500px;margin: auto;border: 1px solid blue;padding: 30px;">
            <h4>Subir PDF</h4>
            <form method="post" action="" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td><label>Titulo</label></td>
                        <td><input type="text" name="titulo"></td>
                    </tr>
                    
                
                        <td><input type="submit" value="Borrar" name="Borrar"></td>
                        <td><a href="lista.php">lista</a></td>
                    </tr>
                </table>
            </form>            
        </div>
    </body>
</html>
