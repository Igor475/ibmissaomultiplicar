<?php
require_once("../../conexao.php");
$pagina = 'membros';
$id = @$_POST['id'];
$ativar = @$_POST['ativar'];


$query = $pdo->query("UPDATE $pagina SET ativo = '$ativar' WHERE id = '$id'");

echo "Alterado com Sucesso";

?>