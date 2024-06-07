<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
    <title>Document</title>
</head>
<body>
<?php
include_once '../navBar.php';

include '../conecta.php';
?>
<br>
<div id="home-container">
<?php
$sql = "SELECT ID, Nome, Valor, Imagem FROM Pratos WHERE status = '0'";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<head>
        <link rel='stylesheet' href='../css/cardprato.css'>
        </head>";
        echo "<div class='card-container'>";
        echo "<img src='" . $row["Imagem"] . "' alt='" . $row["Nome"] . "'>";
        echo "<label for='prato' name='nomeprato'>" . $row["Nome"] . "</label>";
        echo "<label for='prato' name='nomeprato'>" . $row["Valor"] . "</label>";
        echo "<button name='fzr_pedido'><a name='pedir' href='enviar-pedido-script.php?id=" . $row["ID"] . "'>FAZER PEDIDO</a></button>";
        echo "<button name='info_pedido'><a href='info_prato.php?id=" . $row["ID"] . "'>INFO</a></button>";
        echo "</div>";
    }
} else {
    echo "0 resultados";
}
    ?>
    </div>
    <script>
    var timeoutId;

    function redirecionar() {
        window.location.href = "destaques.php"; 
    }

    function resetarTemporizador() {
        clearTimeout(timeoutId); 
        timeoutId = setTimeout(redirecionar, 30000); 
    }

    window.onload = function() {
        timeoutId = setTimeout(redirecionar, 30000); 
        document.body.addEventListener('click', resetarTemporizador); 
    };
</script>

</body>
</html>
