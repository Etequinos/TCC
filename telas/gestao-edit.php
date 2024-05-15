<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/gestaoadd.css">
    <title>Document</title>
   
</head>
<body>
<?php
    include_once '../navBar.php';

    include '../conecta.php';
    ?>
    <?php
    $id = $_GET['id']; // Supondo que você passou o ID do registro pela URL

    $sql = "SELECT * FROM pratos WHERE ID = $id";
    $result = $conexao->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $DB_Nome = $row['Nome'];
        $DB_Descricao = $row['Descricao'];
        $DB_Valor = $row['Valor'];
        $DB_Imagem = $row['Imagem'];
        $DB_Ingredientes = $row['Ingredientes'];
    } else {
        echo "Nenhum resultado encontrado";
    }
    
    ?>
<div class="container">
    <div class="titulo">
        <label for="" name="titulo">Gerenciamento de Prato</label>
    </div>
    <div class="atributos-prato">
             <div id="nome-div">
            <label for="" class="infos">Nome</label>
            <form action="">
                <input type="text" value="<?php echo $DB_Nome; ?>">
            </form>
            </div>

            <div id="desc-div">
            <label for="" class="infos">Descrição</label>
            <form action="">
                <input type="text" value="<?php echo $DB_Descricao; ?>">
            </form>
            </div>

            <div id="valor-div">
            <label for="" class="infos">Valor</label>
            <form action="">
                <input type="number" value="<?php echo $DB_Valor; ?>">
            </form>
            </div>

            <div id="img-div">
            <label for="" class="infos">Link Img</label>
            <form action="">
                <input type="text" value="<?php echo $DB_Imagem; ?>">
            </form>
            </div>

            <div id="ingredientes-div">
            <label for="" class="infos">Ingredientes</label>
            <form action="">
                <input type="text" value="<?php echo $DB_Ingredientes; ?>">
            </form>
            </div>

    </div>
</div>



</body>
</html>