<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/v-salao.css">
    <title>Document</title>

   
</head>
<body>
<?php
include_once '../navBar.php';

include '../conecta.php';
?>
<br>
<div id="v-salao-container">
<?php
$sql = "SELECT Nome FROM Pratos";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    // Exibe os dados em cards
    while($row = $result->fetch_assoc()) {
        echo "<head>
        <link rel='stylesheet' href='../css/card-v-salao.css'>
        </head>";
        echo "<div class='card-container-v'>";
// ALGM COMPLETA PFV --- echo "<label for='mesa' name='numeromesa'>" . $row[""] . "</label>";
        echo "<label for='prato' name='nomeprato'>" . $row["Nome"] . "</label>";
        echo "</div>";
    }
} else {
    echo "0 resultados";
}
    ?>
    </div>

</body>
</html>