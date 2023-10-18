<?php
# index:
# en el mostraremos la salida de las vistas al usuario y tambien a traves de el le
# enviaremos las distintas acciones que el usuario envie al controlador 
# 
# require() Establece que el codigo del archivo invocado es requerido 
# es decir, obligatorio para el funcionamiento del programa. por ello 
# si el archivo especificado en la funcionrequire() no se encuentra 
# saldrá un error "PHO fatal error" y el programa php se deytiene 
# 
# require_once, funciona de la misma que su respectivo, salvo que, al 
# utilizar la version ONCE, se impide la carga de un mismo archivo 
# mas de una vez
require_once "controladores/plantilla.controlador.php";
require_once "controladores/formularios.controlador.php";
require_once "modelos/formularios.modelos.php";


$plantilla = new controladorPlantilla();
$plantilla->ctrTraerPlantilla();
