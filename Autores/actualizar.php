<?php
/*incluye la clase Libro y CrudLibro*/
require_once('crud_autor.php');
require_once('autor.php');
$crud_autor = new crudAutor();
$autor = new autor();
/*buscar el autor utilizando el id que es enviado por GET desde la vista mostrar.php*/
$autor = $crud_autor->obtenerAutor($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Autor</title>
    <link rel="stylesheet" href="/css/actualizar.css">
    <link rel="shortcut icon" href="/imagenes/BOOK.png" type="image/x-icon">
</head>

<body>
    <header class="header">
        <a class="a_volver" href="/index.php">Volver</a>
        <div>
            <p class="p_header">Actualización de los datos del autor</p>
        </div>
    </header>
    <main class="main">
        <section class="section_div">
            <form class="form" action="administrar_autor.php" method="post">
                <div class="form_div">
                    <input type="hidden" name="id" value="<?php echo $autor->getId() ?>">
                    <div class="nombre_div">
                        <p>Nombre Autor:</p>
                    </div>
                    <div class="nombre_div">
                        <input class="input_cambio_nombre" type="text" name="nombre" value="<?php echo $autor->getNombre() ?>" required>
                    </div>
                    <div class="nombre_div">
                        <input type="hidden" name="actualizar" value="actualizar">
                        <input type="submit" value="Guardar">
                    </div>
                </div>
            </form>
        </section>
    </main>
</body>

</html>