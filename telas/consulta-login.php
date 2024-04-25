<?php
include '../conecta.php';

// Testa se o POST tem alguma coisa
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {

    $id = $_POST['id'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM Mesa WHERE ID = '$id' AND Senha = '$senha'";
    $result = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "Login bem-sucedido!";
        session_start();
        $_SESSION['ID'] = $id;

        header('Location: onboarding.php');
        exit; 
    } else {
        session_start();
        $_SESSION['ID'] = "sem login";
        $_SESSION['logado'] = "Número da mesa ou senha incorretos";
        echo "ID ou senha incorretos. Tente novamente.";
        header("Location: login.php");
        exit; 
    }

} else {
    // Sem nada no POST
    header("Location: login.php");
    exit; 
}
?>
