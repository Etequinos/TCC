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
        echo "<label for='prato' name='nomeprato'>" . $row["Nome"] . "</label>";
        echo "<label for='prato' name='nomeprato'>" . $row["Valor"] . "</label>";
        echo "<button name='fzr_pedido'>FAZER PEDIDO</button>";
        echo "";
        echo "</div>";
        $descricao = $row["Descricao"];
        $ingredientes = $row["Ingredientes"];
        $nome = $row["Nome"];
    }
} else {
    echo "0 resultados";
}
    ?>
    
    <Div class="informacao">
    <h1><?php echo $nome; ?></h1>
    <div class="">
    <label for="ingredientes" name="ingredientes"><?php echo $descricao; ?></label>
    <?php echo $ingredientes; ?>
    </div>
</Div>
</div>

</body>
</html>