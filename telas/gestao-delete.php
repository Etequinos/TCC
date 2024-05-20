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
$id = $_GET['id'];
//isso somente se for confirmado\\
    $sql = "DELETE FROM pratos WHERE id = $id;";
$result = $conexao->query($sql);
//isso somente se for confirmado\\

    
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
    

</body>
</html>