<?php
require_once('crud_autor.php');
require_once('autor.php');

$crud_autor = new crudAutor();
$autor = new autor();
$listaAutor = $crud_autor->mostrar();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Autores</title>
    <link rel="stylesheet" href="/css/mostrar.css">
    <link rel="shortcut icon" href="/imagenes/BOOK.png" type="image/x-icon">
</head>

<body>
    <header class="header">
        <a class="a_volver" href="/index.php">Volver</a>
        <div>
            <p class="p_header">Tabla de Autores</p>
        </div>
    </header>
    <main class="main">

    <table border=1>

        <head>
            <td><strong>Nombre</strong></td>
            <td><strong>Apellido</strong></td>
            <td><strong>Dirección</strong></td>
            <td><strong>Teléfono</strong></td>
            <td><strong>Email</strong></td>
            <td><strong>Ciudad</strong></td>
            <td><strong>Actualizar</strong></td>
            <td><strong>Eliminar</strong></td>

        </head>

        <body>

            <?php foreach ($listaAutor as $autor) { ?>
                <tr>
                    <td><?php echo $autor->getNombre() ?></td>
                    <td><?php echo $autor->getApellido() ?></td>
                    <td><?php echo $autor->getDireccion() ?></td>
                    <td><?php echo $autor->getTelefono() ?></td>
                    <td><?php echo $autor->getEmail() ?></td>
                    <td><?php echo $autor->getCiudad() ?></td>
                    <td><a class="a_actualizar" href="actualizar.php?id=<?php echo $autor->getId() ?>&accion=a">Actualizar</a> </td>
                    <td>
                        <a class="a_eliminar" href="administrar_autor.php?id=<?php echo $autor->getId() ?>&accion=e" aria-label="Delete item">
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