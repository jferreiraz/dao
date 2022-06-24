<?php

require_once("config.php");

/* //Carrega todos os registros
$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);
*/

/* //Carrega um usuário especifico de loadbyid
$root = new Usuario(); // Cria novo objeto da classe Usuario
$root->loadById(2); // Com o objeto carrega a função de Usuario (id de número 2)
echo $root;  // Imprime na tela (a função loadById junto a toostring imprime em json)
*/

/* //Carrega uma lista de usuários

$lista = Usuario::getList();
echo json_encode($lista);

*/

/* //Carrega uma lista de usuários buscando pelo login

$search = Usuario::search("FF"); // é necessário ter FF escrito no login para ser encontrado e impresso
echo json_encode($search);

*/ //Carrega um usuário usando o login e a senha

$usuario = new Usuario();
$usuario->login("JoaoFF","1231239683"); // O usuário e senha de login deve ser iguais aos que estão registrados no banco de dados
echo $usuario;

?>