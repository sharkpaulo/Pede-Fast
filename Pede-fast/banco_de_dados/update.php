<?php
session_start();
include_once 'conexao.php';
$id = $_SESSION['id'];

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_NUMBER_INT);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
$categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_SPECIAL_CHARS);

$queryUpdate = $link->query("update tb_produtos set nome='$nome', preco='$preco', descricao='$descricao', categoria='$categoria' where id='$id'");
$affected_rows = mysqli_affected_rows($link);

if($affected_rows > 0):
    header("Location:../consultas.php");
endif;
?>