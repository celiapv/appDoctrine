<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// ejemplo_basicos.php

require_once "bootstrap.php";
require_once './src/Equipo.php';


// buscar por clave primaria
$equipo = $entityManager->find("Equipo", 1);

// mostrar datos
echo "Equipo: ".$equipo->getNombre()."</br>";
echo "Socios del equipo: ".$equipo->getSocios();


?>