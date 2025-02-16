<?php
/*Incluimos el fichero de la clase*/
require_once('../conexion.php');

/*Clase para realizar operaciones con la base de datos*/
class crudAutor
{
    public function __construct() {}
    public function insertar($autor)
    {
        $db = Db::conectar();
        $insert = $db->prepare('INSERT INTO autor values(NULL,:nombre)');
        $insert->bindValue('nombre', $autor->getNombre());
        $insert->execute();
    }

    /*Metodo para mostrar todos los autor*/
    public function mostrar()
    {
        $db = Db::conectar();
        $listaAutor = [];
        $select = $db->query('SELECT * FROM autor');
        foreach ($select->fetchAll() as $autor) {
            $myAutor = new autor();
            $myAutor->setId($autor['id']);
            $myAutor->setNombre($autor['nombre']);
            $listaAutor[] = $myAutor;
        }
        return $listaAutor;
    }

    /*Metodo para eliminar un autor recibe como parametro el id del autor a eliminar*/
    public function eliminar($id){
        $db = Db::conectar();
        $eliminar = $db->prepare('DELETE FROM autor WHERE ID=:id');
        $eliminar->bindValue('id', $id);
        $eliminar->execute();
    }

    /*Metodo para buscar un autor recibe como parametro el id del autor*/
    public function obtenerAutor($id){
        $db = Db::conectar();
        $select = $db->prepare('SELECT * FROM autor WHERE ID=:id');
        $select->bindValue('id', $id);
        $select->execute();
        $autor = $select->fetch();
        $myAutor = new autor();
        $myAutor->setId($autor['id']);
        $myAutor->setNombre($autor['nombre']);
        return $myAutor;
    }

    /*Metodo para actualizar un autor recibe como parametro el autor*/
    public function actualizar($autor)
    {
        $db = Db::conectar();
        $actualizar = $db->prepare('UPDATE autor SET nombre=:nombre WHERE ID=:id');
        $actualizar->bindValue('id', $autor->getId());
        $actualizar->bindValue('nombre', $autor->getNombre());
        $actualizar->execute();
    }
}
