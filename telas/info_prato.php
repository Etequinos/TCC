<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
    

    <link rel="stylesheet" href="../css/login.css">
    <title>Document</title>

   
</head>
<body>
<?php
    include_once '../navBar.php';
    include '../conecta.php';    
    ?>
<?php
$id = $_GET['id'];

// Consulta os dados do prato com o ID fornecido
$sql = "SELECT * FROM Pratos WHERE ID = $id";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    // Exibe os detalhes do prato
    while($row = $result->fetch_assoc()) {
        echo "<h2>" . $row["Nome"] . "</h2>";
        echo "<p>Descrição: " . $row["Descricao"] . "</p>";
        echo "<p>Valor: R$ " . $row["Valor"] . "</p>";
        echo "<p>Valor com Desconto: " . $row["Fidelidade"] . "</p>";
        echo "<img src='" . $row["Imagem"] . "' alt='" . $row["Nome"] . "'>";
        echo "<p>Ingredientes: " . $row["Ingredientes"] . "</p>";
        // Exiba outras informações conforme necessário
   
    }
} else {
    echo "Prato não encontrado";
}
?>

</body>
</html>