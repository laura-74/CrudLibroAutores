<?php
require_once('crud_autor.php');
require_once('autor.php');

$crud = new crudAutor();
$autor = new Autor();

if (isset($_POST['insertar'])) {
    $autor->setNombre($_POST['nombre']);
    $autor->setApellido($_POST['apellido']);
    $autor->setDireccion($_POST['direccion']);
    $autor->setTelefono($_POST['telefono']);
    $autor->setEmail($_POST['email']);
    $autor->setCiudad($_POST['ciudad']);
    $crud->insertar($autor);
    header('Location: ../index.php');
} elseif (isset($_POST['actualizar'])) {
    $autor->setId($_POST['id']);
    $autor->setNombre($_POST['nombre']);
    $autor->setApellido($_POST['apellido']);
    $autor->setDireccion($_POST['direccion']);
    $autor->setTelefono($_POST['telefono']);
    $autor->setEmail($_POST['email']);
    $autor->setCiudad($_POST['ciudad']);
    $crud->actualizar($autor);
    header('Location: ../index.php');
} elseif (isset($_GET['accion']) && $_GET['accion'] == 'e') {
    $crud->eliminar($_GET['id']);
    header('Location: ../index.php');
} elseif (isset($_GET['accion']) && $_GET['accion'] == 'a') {
    header('Location: actualizar.php');
}
?>
