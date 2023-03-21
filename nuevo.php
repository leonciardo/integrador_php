<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo producto</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container">
        <h2>Nuevo producto</h2>
        <form method="POST" action="guardar.php" class="form-horizontal" enctype= "multipart/form-data">

            <div class="form-group">
                <label class="control-label col-sm-2" for="producto">Producto:</label>
                <div class="col-sm-10">
                    <input type="text" name="producto" class="form-control" id="producto" placeholder="Ingrese nombre del producto" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="cantidad">Cantidad:</label>
                <div class="col-sm-10">
                    <input type="number" name="cantidad" class="form-control" id="cantidad" placeholder="Ingrese cantidad" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="precio">Precio:</label>
                <div class="col-sm-10">
                    <input type="number" name="precio" class="form-control" id="precio" placeholder="Ingrese precio" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="archivo">Imagen:</label>
                <div class="col-sm-10">
                    <input type="file" name="archivo" class="form-control-ggb  form-control" id="archivo" placeholder="Suba una imagen" accept ="image/jpeg">
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
