<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous" />

    <link rel="stylesheet" href="node_modules\@fortawesome\fontawesome-free\css\all.css">
    <link rel="stylesheet" href="src/style/style.css">
    <title>Hello, world!</title>
</head>


<body>

    <?php require("src/db/db_select.php"); ?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <?php foreach ($resultado as $fila) : ?>
                <div class="alert alert-<?php echo $fila['color'] ?>" role="alert">
                    <?php echo $fila['color'] ?>
                    -
                    <?php echo $fila['descripcion'] ?>
                    <!--  -->
                    <a href="src/db/db_delete.php?id_colores=<?php echo $fila['id_colores']; ?>"
                        onclick="return confirm('¿Desea confirmar la operacion?')">
                        <i class="fas fa-trash"></i>
                    </a>
                    <a
                        href="index.php?id=<?php echo $fila['id_colores']; ?>&colores=<?php echo $fila['color']; ?>&descripcion=<?php echo $fila['descripcion']; ?>">
                        <i class="far fa-edit "></i>
                    </a>
                </div>
                <?php endforeach ?>
            </div>
            <div class="col-md-6">
                <?php if ($_GET) : ?>
                <h1 class="text-uppercase"><strong>Editar elementos</strong></h1>
                <form action="src/db/db_edit.php" method="get">
                    <input type="text" name="color" class="form-control" value="<?php echo $_GET['colores']; ?>">
                    <input type="text" name="descripcion" class="form-control mt-3"
                        value="<?php echo $_GET['descripcion']; ?>">
                    <input type="hidden" name="id_colores" value="<?php echo $_GET['id']; ?>">
                    <button type="submit" class="btn btn-primary mt-3" name="buton">Editar </button>
                </form>
                <?php endif ?>
                <?php if (!$_GET) : ?>
                <h1 class="text-uppercase"><strong>agregar elementos</strong></h1>
                <form action="src/db/db_add.php" method="post">
                    <input type="text" name="color" class="form-control" value="">
                    <input type="text" name="descripcion" class="form-control mt-3" value="">
                    <button type="submit" class="btn btn-primary mt-3" name="buton">Agregar</button>
                </form>
                <?php endif ?>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
</body>

</html>