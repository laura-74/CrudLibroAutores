<?php
/*incluye la clase Libro y CrudLibro*/
require_once('crud_libro.php');
require_once('libro.php');
$crud = new crudLibro();
$libro = new Libro();
/*buscar el libro utilizando el id que es enviado por GET desde la vista mostrar.php*/
$libro = $crud->obtenerLibro($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar libro</title>
    <link rel="stylesheet" href="/css/ingresar_libro.css">
    <link rel="shortcut icon" href="/imagenes/BOOK.png" type="image/x-icon">
    <script src="/js/input.js" defer></script>

</head>

<body>
    <header class="header">
        <a class="a_volver" href="/index.php">Volver</a>
        <div>
            <p class="p_header">Actualización del libro</p>
        </div>
    </header>
    <main>
    <section class="section_div">
        <div class="form_div">
            <form action="/Libro/administrar_libro.php" method="post">
                <input type="hidden" name="id" value="<?php echo $libro->getId() ?>">
                <div class="nombre_categoria_div" >
                <label>Nombre Libro</label>
                <input class="input_cambio_nombre" type="text" name="nombre" value="<?php echo $libro->getNombre() ?>" required>
                <input type="hidden" name="actualizar" value="actualizar">
                </div>
                <div class="nombre_categoria_div">
                    <label  for="categoria">Categoria del libro</label>
                    <select class="input_cambio_nombre" name="categoria" required>
                        <option value="">Seleccione...</option>
                        <option value="Terror">Terror</option>
                        <option value="Ficcion">Ficción</option>
                        <option value="Aventura">Aventura</option>
                        <option value="Romance">Romance</option>
                        <option value="Fantasia">Fantasía</option>
                        <option value="Misterio">Misterio</option>
                        <option value="Biografia">Biografía</option>
                        <option value="Historia">Historia</option>
                        <option value="Otro">Otro</option>
                    </select>
                </div>

                <div>
                    <input class="boton_guardar" type="submit" value="Guardar">
                </div>
            </form>
        </div>
    </section>
    </main>
</body>

</html>