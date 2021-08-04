<?php 

$nome = "Pedro";
$site = 'www.atmtec.com.br';

$ano = 1999;
$salario = 1000.00;
$bloqueado = false;
//////////////////////////////////////////////////

$frutas = array("Manga", "Laranja", "Banana");

echo $frutas [0];

$nascimento = new DateTime();

echo "<br>";

var_dump($nascimento);
//////////////////////////////////////////////////

$arquivo = fopen("exemplo03.php","r");

echo "<br>";

var_dump($arquivo);
//////////////////////////////////////////////////

$nulo = NULL;
$vazio = "";

?>