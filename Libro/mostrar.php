<?php
require_once('crud_libro.php');
require_once('libro.php');

$crud = new crudLibro();
$libro = new Libro();
$listaLibros = $crud->mostrar();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar libros</title>
    <link rel="stylesheet" href="/css/mostrar.css">
    <link rel="shortcut icon" href="/imagenes/BOOK.png" type="image/x-icon">

</head>

<body>
    <header class="header">
        <a class="a_volver" href="/index.php">Volver</a>
        <div>
            <p class="p_header">Tabla de libros</p>
        </div>
    </header>
    <main class="main">

        <table border=1>

            <head>
                <td><strong>Nombre</strong> </td>
                <td><strong>Categoria</strong></td>
                <td><strong>Actualizar</strong></td>
                <td><strong>Eliminar</strong></td>
            </head>

            <body>
                <?php foreach ($listaLibros as $libro) { ?>
                    <tr>
                        <td><?php echo $libro->getNombre() ?></td>
                        <td><?php echo $libro->getCategoria() ?></td>
                        <td><a class="a_actualizar" href="actualizar.php?id=<?php echo $libro->getId() ?>&accion=a">Actualizar</a> </td>
                        <td>
                            <a class="a_eliminar" href="administrar_libro.php?id=<?php echo $libro->getId() ?>&accion=e" aria-label="Delete item">
                                <svg class="trash-svg" viewBox="0 -10 64 74" xmlns="http://www.w3.org/2000/svg">
                                    <g id="trash-can">
                                        <rect x="16" y="24" width="32" height="30" rx="3" ry="3" fill="#e74c3c"></rect>
                                        <g transform-origin="12 18" id="lid-group">
                                            <rect x="12" y="12" width="40" height="6" rx="2" ry="2" fill="#c0392b"></rect>
                                            <rect x="26" y="8" width="12" height="4" rx="2" ry="2" fill="#c0392b"></rect>
                                        </g>
                                    </g>
                                </svg>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
            </body>
        </table>
    </main>
</body>

</html>