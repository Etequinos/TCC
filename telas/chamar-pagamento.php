<?php
include '../conecta.php';


$id = $_GET["id"];

$sql = "SELECT * FROM pratos WHERE ID = $id";
$resultado = mysqli_query($conexao, $sql);
if ($resultado->num_rows > 0) {
    $row = $resultado->fetch_assoc();
$prato_ID = $row["ID"];
session_start();

$mesa_ID = $_SESSION['ID'];
$sql = "INSERT INTO pedidos (ID, ID_Mesa, ID_Prato, status) VALUES (NULL, '$mesa_ID', '$prato_ID', 0);";
$resultado = mysqli_query($conexao, $sql);
}
    
    ?>
