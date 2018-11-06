<?php
// Controladores
require_once "controladores/plantilla.controlador.php";

// Modelos
// require_once "modelos/plantilla.modelo.php";
require_once "modelos/rutas.php";

// Instanciamos la clase
$plantilla = new ControladorPlantilla();
$plantilla -> plantilla();
?>