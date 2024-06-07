<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/gestao-delete.css">

    <title>Document</title>

   
</head>
<body>
<?php
    include_once '../navBar-gestao.php';
    include '../conecta.php';   
    $id = $_GET['id'];


    
    ?>
    <?php
    $sql = "SELECT * FROM pratos WHERE ID = $id";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $DB_Nome = $row['Nome'];
    } else {
        echo "Nenhum resultado encontrado";
    }

    ?>  
    
    <form method="post" action="../gestao-delete-script.php">
    <div class="container">
        <div class="titulo">
        <h1>Confirmar desativação</h1>
        </div>
        <div class="content">
        <label for="" name="confirma">Tem certeza que deseja desativar?</label>
        <div class="botoes">
                <button type="button" name="submit" onclick="window.location.href='gestao-menu.php'">CANCELAR</button>
                <button type="submit" name="excluir">DESATIVAR</button>
                <input type="hidden" name="id" value="<?php echo $id ?>">
            </form>
        </div>
      </div>
    </div>
    



<!--
    </div>
    </div>
    <div class="botoes">
    <button id="add" type="button"><a href="gestao-menu.php">CANCELAR</a></button>

    necessário para deletar
    <form action="../gestao-delete-script.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id ?>">
    <button id="add" type="submit">EXCLUIR</button>
    </form>
    Final do DELETE
    
</div>
-->
</body>
</html>