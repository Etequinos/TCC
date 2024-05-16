<?php
include 'conecta.php';

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$imagem = $_POST['imagem'];
$ingredientes = $_POST['ingredientes'];



$sql = "INSERT INTO `pratos` (`ID`, `Nome`, `Descricao`, `Valor`, `Imagem`, `Ingredientes`) VALUES
(NULL, '$nome', '$descricao', '$valor', '$imagem', '$ingredientes');";
    $resultado = $conexao->query($sql);

    header('Location: telas/gestao-menu.php');
?>


