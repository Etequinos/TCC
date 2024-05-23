<?php
include '../conecta.php';

$pedido_ID = $_GET['id'];

$sql = "DELETE FROM pedidos WHERE ID = $pedido_ID";
$result_pedidos = $conexao->query($sql);


header("Location: v-salao.php");
?>