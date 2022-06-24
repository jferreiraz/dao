<?php

require_once("config.php");

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);

echo "====================================<br>====================================<br>";

*/

$root = new Usuario();

$root->loadById(2);

echo $root;

?>