<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Document</title>

   
</head>
<body>

</script>
<?php
    include_once '../navBar.php';
    ?>
   

    <?php
    $sql = "SELECT ID, Nome, Valor, Imagem FROM Pratos WHERE status = '0'";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<head>
        <link rel='stylesheet' href='../css/card-edit.css'>
        </head>";
        echo "<div class='card-edit-container'>";
        echo "<label for='prato' name='nomeprato'>".$row["Nome"]."</label>";
        echo "<button name='editar'><a href='gestao-edit.php?id=" . $row["ID"] . "'><i class='fa-regular fa-pen-to-square'></i>EDITAR</a></button>";


        echo "<button name='excluir'><a name='branco'href='gestao-delete.php?id=" . $row["ID"] . "'>DESATIVAR</a></button>";

        echo "</div>";

    }
} else {
    echo "0 resultados";
}
?>
<h1>PRATOS DESATIVADOS</h1>
<?php
$sql = "SELECT ID, Nome, Valor, Imagem FROM Pratos WHERE status = '1'";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<head>
        <link rel='stylesheet' href='../css/card-edit.css'>
        </head>";
        echo "<div class='card-edit-container'>";
        echo "<label for='prato' name='nomeprato'>".$row["Nome"]."</label>";
        echo "<button name='editar'><a href='gestao-edit.php?id=" . $row["ID"] . "'><i class='fa-regular fa-pen-to-square'></i>EDITAR</a></button>";


        echo "<button name='ativa'><a name='branco'href='gestao-ativar.php?id=" . $row["ID"] . "'>ATIVAR</a></button>";

        echo "</div>";

    }
} else {
    echo "0 resultados";
}

    ?>  
    <div class="botoes">
<a href="login.php" class="button" name="add">SAIR</a>
<a href="gestao-add.php" class="button" name="add">ADICIONAR PRATO</a>

</div>
    


<script>
    document.getElementById("backBtn").addEventListener("click", function() {
      window.history.back();
    });
</script>
</body>
</html>