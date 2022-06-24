<?php

require_once("config.php");

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);

echo "====================================<br>====================================<br>";

*/

$root = new Usuario(); // Cria novo objeto da classe Usuario

$root->loadById(2); // Com o objeto carrega a função de Usuario (id de número 2)

echo $root;  // Imprime na tela (a função loadById junto a toostring imprime em json)

?>