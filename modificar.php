<?php

require_once "bootstrap.php";
require_once './src/EquipoDTO.php';

//$id = $_GET['id'];
$id = 2;

/*buscar el jugador con el id indicado*/
$equipo = $entityManager->find("Equipo", $id);

if(!$equipo){
   echo "Equipo no encontrado";
}else{
   $equipo->setFundacion(1990);
   $equipo->setSocios(75000);
   //$entityManager->persist($equipo);
   $entityManager->flush();

   echo "Equipo modificado";
}
?>