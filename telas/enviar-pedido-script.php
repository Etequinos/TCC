<?php
include '../conecta.php';

$id = $_GET["id"];

$sql = "SELECT * FROM pratos WHERE ID = $id";
$resultado = mysqli_query($conexao, $sql);
if ($resultado->num_rows > 0) {
    $row = $resultado->fetch_assoc();
$status = $row["status"];
$prato_ID = $row["ID"];
$prato_Nome = $row["Nome"];
$prato_Valor = $row["Valor"];

    if ($status == '1'){
        header('Location: home.php');
    }
}

session_start();

$mesa_ID = $_SESSION['ID'];

$sql = "UPDATE mesa SET Status = 1 WHERE ID = $mesa_ID"; // seta a mesa como comanda aberta
$resultado = mysqli_query($conexao, $sql);

$sql = "INSERT INTO pedidos (ID, ID_Mesa, ID_Prato, status) VALUES (NULL, '$mesa_ID', '$prato_ID', 1);";
$resultado = mysqli_query($conexao, $sql);

$sql = "INSERT INTO comandas (ID, ID_Mesa, ID_Prato, Valor_Total, Fidelidade) VALUES (NULL, '$mesa_ID', '$prato_ID', '$prato_Valor', 0);";
$resultado = mysqli_query($conexao, $sql);

header("Location: pedido_enviado.php");
?>


