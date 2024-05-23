<?php
include '../conecta.php';

$pedido_ID = $_GET['id'];

$sql = "UPDATE PEDIDOS SET Status = FALSE WHERE ID = $pedido_ID";
$result_pedidos = $conexao->query($sql);


header("Location: v-cozinha.php");
?>