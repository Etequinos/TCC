<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Document</title>

   
</head>
<body>
<?php
    include_once '../navBar.php';

    $sql = "SELECT ID, Nome, Valor, Imagem FROM Pratos";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    // Exibe os dados em cards
    while($row = $result->fetch_assoc()) {
        echo "<head>
        <link rel='stylesheet' href='../css/card-edit.css'>
        </head>";
        echo "<div class='card-edit-container'>";
        echo "<label for='prato' name='nomeprato'>nome do prato</label>";
        echo "<button name='excluir'>EXCLUIR</button>";
        echo "<button name='editar'><a href='info_prato.php'><i class='fa-regular fa-pen-to-square'></i>EDITAR</a></button>";
        echo "</div>";




    }
} else {
    echo "0 resultados";
}

        
        
        
    
    
    ?>   

</body>
</html>