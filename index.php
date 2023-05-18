<?php
    require './modelos/Conexion.php';
    $resultado = Conexion::ejecutar("INSERT INTO productos(producto_nombre, producto_precio) values('prueeba','5')");
    var_dump($resultado);