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
    include_once '../navBar.php';
    include '../conecta.php';   
    $id = $_GET['id'];


    
    ?>  
    <div class="container">
        <div class="titulo">
        <h1>Confirmar exclusão</h1>
        </div>
        <div class="content">
        <label for="" name="confirma">Tem certeza que deseja excluir?</label>
        <div class="botoes">
        <button type="submit" name="submit">CANCELAR</button>
        <button type="submit" name="excluir">EXCLUIR</button>
        </div>
      </div>
    </div>
    

    $sql = "SELECT * FROM pratos WHERE ID = $id";
    $result = $conexao->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $DB_Nome = $row['Nome'];
    } else {
        echo "Nenhum resultado encontrado";
    }

    ?>


</div>
    </div>
    <div class="botoes">
    <button id="add" type="button"><a href="gestao-menu.php">CANCELAR</a></button>

    <!--necessário para deletar-->
    <form action="../gestao-delete-script.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id ?>">
    <button id="add" type="submit">EXCLUIR</button>
    </form>
    <!--Final do DELETE-->
    
</div>
</body>
</html>