<!DOCTYPE html>
<html lang ="en">

<head>
    <title>Libreria don pacho</title>
    <link rel="stylesheet" href="e.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Spartan&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
</head>
<body>
<form name="form1" id="form1" method="post" action="subida.php" enctype="multipart/form-data">

<h4 class="text-center">Subir Archivo</h4>

<div class="form-group">
    <label class="col-sm-2 control-label">Archivo</label>
    <div class="col-sm-8">
        <input type="file" class="form-control" id="archivo[]" name="archivo[]">
    </div>

    <button type="submit" class="btn btn-primary">Subir</button>
</div>
</form>
</form>

</body>
