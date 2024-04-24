<?php
include '../conecta.php';



$id = $_POST['id'];
$senha = $_POST['senha'];


$sql = "SELECT * FROM Mesa WHERE ID = '$id' AND Senha = '$senha'";
$result = mysqli_query($conexao, $sql);


if (mysqli_num_rows($result) > 0) {

    echo "Login bem-sucedido!";
} else {

    echo "ID ou senha incorretos. Tente novamente.";
}
?>