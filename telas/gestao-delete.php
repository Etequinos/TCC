<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mult_pagamento.css">
    <title>Document</title>

   
</head>
<body>
<?php
    include_once '../navBar.php';
    include '../conecta.php';   
    $id = $_GET['id'];

    $sql = "SELECT * FROM pratos WHERE ID = $id";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $DB_Nome = $row['Nome'];
    } else {
        echo "Nenhum resultado encontrado";
    }

    ?>
    <div class="pagamento">
        <div class="titulo">
<h1>EXLUIR UM PRATO</h1>
</div>
<div class="conteudo">
<h3>Você REALMENTE deseja excluir o prato:</h3>
<p><?php echo $DB_Nome;?></p>
<h4>ESSA AÇÃO É IRREVERSIVÉL, TOME CUIDADO</h4>
</div>

</div>
    </div>
    <div class="botoes">
    <button id="add" type="button"><a href="gestao-menu.php">CANCELAR</a></button>
    <form action="../gestao-delete-script.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id ?>">
    <button id="add" type="submit">EXCLUIR</button>
    </form>
</div>
</body>
</html>