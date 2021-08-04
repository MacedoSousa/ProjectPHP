<?php 

$nome = "Pedro";

$sobrenome = "Macedo";

$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;//reproduz o argumento

exit;

echo "<br>";

unset($nomeCompleto);//limpa a variavel

if (isset($nomeCompleto)) { //se a variavel possui  argumento ira mostrar.

	echo $nomeCompleto;
}

exit;

?>