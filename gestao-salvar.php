<?php
include 'conecta.php';

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$imagem = $_POST['imagem'];
$ingredientes = $_POST['ingredientes'];
$id = $_POST['id']; 


$sql = "UPDATE `pratos` 
SET `Nome` = '$nome', 
    `Descricao` = '$descricao', 
    `Valor` = '$valor', 
    `Imagem` = '$imagem', 
    `Ingredientes` = '$ingredientes' 
WHERE `ID` = $id;
";
    $resultado = $conexao->query($sql);

    header('Location: telas/gestao-edit.php?id='.$id);
?>


