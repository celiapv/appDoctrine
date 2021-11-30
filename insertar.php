<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "bootstrap.php";
require_once './src/EquipoDTO.php';

$nuevo = new Equipo();
$nuevo->setNombre('Sevilla F.C.');
$nuevo->setFundacion(1890);
$nuevo->setSocios(50000);
$nuevo->setCiudad('Sevilla');

$entityManager->persist($nuevo);
$entityManager->flush();

echo "Equipo insertado " . $nuevo->getId() . "\n";

?>