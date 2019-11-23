<?php

//Muestra Multiples productos, cantidad de productos como parametros

function obtenerProductos($cantidad = 10) {
    include 'conexion.php';
    
    try {
        $sql = "SELECT * from productos limit $cantidad ";
        $resultado = $db->query( $sql );
    } catch(Exception $e) {
        echo $e->getMessage();
        return array();
    }
    return $resultado;
}

//Muestra 1 solo producto
function obtenerProducto($id_producto) {
    include 'conexion.php';
    
    try {
        $sql = "SELECT nombre, imagen_completa, precio, descripcion, descripcion_corta from productos
        where id = $id_producto";
        $resultado = $db->query( $sql );
        echo $sql;
    } catch(Exception $e) {
        echo $e->getMessage();
        return array();
    }
    return $resultado;
}