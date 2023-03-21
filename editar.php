<?php
include 'conexion.php';
$conexion = conexiondb();
$id = $_GET['id'];
$registro = $conexion -> query("SELECT * FROM stock WHERE id = '$id'");
$reg  = $registro->fetch_assoc();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Editar producto</h2>
        <form method="POST" action="actualizar.php" class="form-horizontal" enctype= "multipart/form-data">
            <input hidden value="<?php echo $reg['id'];?>" readonly name = 'id' >

            <div class="form-group">
                <label class="control-label col-sm-2" for="producto">Producto:</label>
                <div class="col-sm-10">
                <input type="text" name="producto" class="form-control" id="producto" placeholder="Ingrese nombre del producto" value="<?php echo $reg['producto'];?>" required>
 
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="cantidad">Cantidad:</label>
                <div class="col-sm-10">
                    <input type="number" name="cantidad" class="form-control" id="cantidad" placeholder="Ingrese cantidad" value="<?php echo $reg['cantidad'];?>" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="precio">Precio:</label>
                <div class="col-sm-10">
                    <input type="number" name="precio" class="form-control" id="precio" placeholder="Ingrese precio" value="<?php echo $reg['precio'];?>" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="archivo">Imagen:</label>
                <div class="col-sm-10">
                    <input type="file" name="archivo" class="form-control" id="archivo" placeholder="Suba una imagen" accept ="image/jpeg">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a href="index.php" class="btn btn-primary">Cancelar</a>
                </div>
            </div>
        </form>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
