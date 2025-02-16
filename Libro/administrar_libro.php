<?php
/*incluye la clase Libro y CrudLibro*/

require_once('crud_libro.php');
require_once('libro.php');

$crud = new crudLibro();
$libro = new Libro();

echo "Insertar: Nombre = " . $_POST['nombre'];
/*Si el elemento insertar no viene nulo, llama al crud e inserta un libro*/
if (isset($_POST['insertar'])) {
    $libro->setNombre($_POST['nombre']);
    $libro->setCategoria($_POST['categoria']);
    /*llama a la función insertar definida en el crud*/
    $crud->insertar($libro);
    header('Location: ../index.php');
    /*Si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el libro*/
} elseif (isset($_POST['actualizar'])) {
    $libro->setId($_POST['id']);
    $libro->setNombre($_POST['nombre']);
    $libro->setCategoria($_POST['categoria']);
    $crud->actualizar($libro);
    header('Location: ../index.php');
} elseif ($_GET['accion'] == 'e') {
    $crud->eliminar($_GET['id']);
    header('Location: ../index.php');
    /*Si la variable accion enviada por GET es == 'a', envía a la página de actualización*/
} elseif ($_GET['accion'] == 'a') {
    header('Location: actualizar.php');
}
