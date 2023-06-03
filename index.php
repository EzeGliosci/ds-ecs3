<?php

require_once 'modelo/TipoProducto.php';
require_once 'modelo/Producto.php';



$t = new TipoProducto;

$t->Id = "2";
$t-> Descripcion = "galletitas" ;

$p = new Producto;

$p->Id = 1;
$p->Nombre = "Merenguitas";
$p-> Precio = "1000";
$p-> Stock = "10";
$p-> TipoProducto = $t;





$p->MostrarDatos();