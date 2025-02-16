<?php
/*Incluimos el fichero de la clase*/
require_once('../conexion.php');

/*Clase para realizar operaciones con la base de datos*/
class crudLibro
{
    public function __construct() {}

    public function insertar($libro){
        $db = Db::conectar();
        $insert = $db->prepare('INSERT INTO libro (nombre, categoria) VALUES (:nombre, :categoria)');
        $insert->bindValue('nombre', $libro->getNombre());
        $insert->bindValue('categoria', $libro->getCategoria());    
        $insert->execute();
    }

    /*Metodo para mostrar todos los libros*/
    public function mostrar()
    {
        $db = Db::conectar();
        $listaLibros = [];
        $select = $db->query('SELECT * FROM libro');
        foreach ($select->fetchAll() as $libro) {
            $myLibro = new Libro();
            $myLibro->setId($libro['id']);
            $myLibro->setNombre($libro['nombre']);
            $myLibro->setCategoria($libro['categoria']);
            $listaLibros[] = $myLibro;
        }
        return $listaLibros;
    }

    /*Metodo para eliminar un libro recibe como parametro el id del libro a eliminar*/
    public function eliminar($id){
        $db = Db::conectar();
        $eliminar = $db->prepare('DELETE FROM libro WHERE ID=:id');
        $eliminar->bindValue('id', $id);
        $eliminar->execute();
    }

    /*Metodo para buscar un libro recibe como parametro el id del libro*/
    public function obtenerLibro($id)
    {
        $db = Db::conectar();
        $select = $db->prepare('SELECT * FROM libro WHERE ID=:id');
        $select->bindValue('id', $id);
        $select->execute();
        $libro = $select->fetch();
        $myLibro = new Libro();
        $myLibro->setId($libro['id']);
        $myLibro->setNombre($libro['nombre']);
        $myLibro->setCategoria($libro['categoria']);
        return $myLibro;
    }

    /*Metodo para actualizar un libro recibe como parametro el libro*/
    public function actualizar($libro)
    {
        $db = Db::conectar();
        $actualizar = $db->prepare('UPDATE libro SET nombre=:nombre, categoria=:categoria WHERE ID=:id');
        $actualizar->bindValue('id', $libro->getId());
        $actualizar->bindValue('nombre', $libro->getNombre());
        $actualizar->bindValue('categoria', $libro->getCategoria());
        $actualizar->execute();
    }
}
?>
