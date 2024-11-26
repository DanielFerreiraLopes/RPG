<?php
include 'class/Player.php';


$ataque1 = new Ataque("Espada");
$defesa1 = new Defesa("Armadura (Capacete)");
$defesa2 = new Defesa("Armadura (Peitural)");
$defesa3 = new Defesa("Armadura (Joelheira)");
$defesa4 = new Defesa("Armadura (Botas)");
$magia1 = new Magia("Cajado");

$player1 = new Player("Daran", 5);

echo $player1->inventario->getCapacidadeMaxima();

$player1->coletarItem($magia1);
$player1->coletarItem($ataque1);
$player1->coletarItem($defesa1);
$player1->coletarItem($defesa2);
$player1->coletarItem($defesa3);
$player1->coletarItem($defesa4);

$player1->listarItens();

$player1->soltarItem(0);

$player1->listarItens();


$player1->subirNivel();
$player1->subirNivel();
$player1->subirNivel();

// $inventario = new Inventario(20);

// $inventario->adicionar($magia1);

// $inventario->listar();
?>