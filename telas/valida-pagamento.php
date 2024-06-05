<?php
session_start();
include '../conecta.php';
require '../config.php';

$codigo = $_POST['code'];

if ($codigo == $senha_salao){
$mesa_ID = $_SESSION['ID'];

//FALTA SQL PARA DB_COMANDAS conversar com grupo sobre status ou delete

    $sql = "UPDATE mesa SET Status = 0 WHERE ID = $mesa_ID"; 
    $resultado = mysqli_query($conexao, $sql);

    header('Location: pagamento-aprovado.php');
    //pass
} else {
    header('Location: autorizar-pagamento.php?erro=true');

}








?>