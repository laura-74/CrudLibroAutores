<?php
/*incluye la clase autor y crud_autor*/

require_once('crud_autor.php');
require_once('autor.php');

$crud_autor = new crudAutor();
$autor = new autor();

echo "Insertar: Nombre = " . $_POST['nombre'];
/*Si el elemento insertar no viene nulo, llama al crud e inserta un autor*/
if (isset($_POST['insertar'])) {
    $autor->setNombre($_POST['nombre']);
    /*llama a la función insertar definida en el crud*/
    $crud_autor->insertar($autor);
    header('Location: ../index.php');
    /*Si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el libro*/
} elseif (isset($_POST['actualizar'])) {
    $autor->setId($_POST['id']);
    $autor->setNombre($_POST['nombre']);
    $crud_autor->actualizar($autor);
    header('Location: ../index.php');
}elseif ($_GET['accion'] == 'e') {
    $crud_autor->eliminar($_GET['id']);
    header('Location: ../index.php');
    /*Si la variable accion enviada por GET es == 'a', envía a la página de actualización*/
} elseif ($_GET['accion'] == 'a') {
    header('Location: /Autores/actualizar.php');
}
?>
