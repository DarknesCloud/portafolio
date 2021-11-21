<?php

include_once("controladores/controlador_paginas.php");
include_once("controladores/controlador_admin.php");

$objControlador="Controlador".ucfirst($controlador);

$controlador=new $objControlador();
$controlador->$accion();

?>