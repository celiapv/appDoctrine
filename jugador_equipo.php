<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

 require_once "bootstrap.php";
 require_once './src/Equipo.php';
 require_once './src/Jugador.php';

 $id = 5;

 /*buscar el jugador con el id indicado*/
 $jugador = $entityManager->find("Jugador", $id);

 if(!$jugador){
    echo "Jugador no encontrado";
 }else{
    echo "Nombre del jugador: ". $jugador->getNombre()."<br>";
    $equipo = $jugador->getEquipo();
    echo "Nombre del equipo: ". $equipo->getNombre();
 }
 ?>