<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
    

    <link rel="stylesheet" href="../css/infoPrato.css">
    <title>Document</title>

   
</head>
<body>
<?php
    include_once '../navBar.php';
    include '../conecta.php';    
    ?>
    <div class="infoPrato-container">
<?php
$id = $_GET['id'];

// Consulta os dados do prato com o ID fornecido
$sql = "SELECT * FROM Pratos WHERE ID = $id";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    // Exibe os dados em cards
    while($row = $result->fetch_assoc()) {
        echo "<head>
        <link rel='stylesheet' href='../css/cardprato.css'>
        </head>";
        echo "<div class='card-container'>";
        echo "<img src='" . $row["Imagem"] . "' alt='" . $row["Nome"] . "'>";
        echo "<label for='prato' name='nomeprat'>" . $row["Nome"] . "</label>>";
        echo "<label for='prato' name='nomeprato'>" . $row["Valor"] . "</label>";
        echo "<button name='fzr_pedido'>FAZER PEDIDO</button>";
        echo "<button name='info_pedido'><a href='info_prato.php?id=" . $row["ID"] . "'>INFO</a></button>";
        echo "</div>";
    }
} else {
    echo "0 resultados";
}
    ?>
    <h1>NOME DO PRATO</h1>
</div>

</body>
</html>