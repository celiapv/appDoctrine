<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once "bootstrap.php";
require_once './src/Equipo.php';

$nuevo = new Equipo();
$nuevo->setNombre('Celia F.C.');
$nuevo->setFundacion(2000);
$nuevo->setSocios(60000);
$nuevo->setCiudad('Cáceres');

$entityManager->persist($nuevo);
$entityManager->flush();

echo "Equipo insertado " . $nuevo->getId() . "\n";

?>