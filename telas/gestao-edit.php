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
    <button class="button" id="backBtn">
  <div class="button-box">
    <span class="button-elem">
      <svg viewBox="0 0 46 40" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M46 20.038c0-.7-.3-1.5-.8-2.1l-16-17c-1.1-1-3.2-1.4-4.4-.3-1.2 1.1-1.2 3.3 0 4.4l11.3 11.9H3c-1.7 0-3 1.3-3 3s1.3 3 3 3h33.1l-11.3 11.9c-1 1-1.2 3.3 0 4.4 1.2 1.1 3.3.8 4.4-.3l16-17c.5-.5.8-1.1.8-1.9z"
        ></path>
      </svg>
    </span>
    <span class="button-elem">
      <svg viewBox="0 0 46 40">
        <path
          d="M46 20.038c0-.7-.3-1.5-.8-2.1l-16-17c-1.1-1-3.2-1.4-4.4-.3-1.2 1.1-1.2 3.3 0 4.4l11.3 11.9H3c-1.7 0-3 1.3-3 3s1.3 3 3 3h33.1l-11.3 11.9c-1 1-1.2 3.3 0 4.4 1.2 1.1 3.3.8 4.4-.3l16-17c.5-.5.8-1.1.8-1.9z"
        ></path>
      </svg>
    </span>
  </div>
</button>
<script>
    document.getElementById("backBtn").addEventListener("click", function() {
      window.history.back();
    });
</script>
        <label for="" name="titulo">Gerenciamento de Prato</label>
    </div>
    <div class="atributos-prato">
             <div id="nome-div">
            <label for="" class="infos">Nome</label>
            <form action="../gestao-salvar.php" method="post">
                <input type="text" name="nome" value="<?php echo $DB_Nome; ?>">
            </div>

            <div id="desc-div">
            <label for="" class="infos">Descrição</label>
                <input type="text" name="descricao" value="<?php echo $DB_Descricao; ?>">
            </div>

            <div id="valor-div">
            <label for="" class="infos">Valor</label>
                <input type="number" name="valor" value="<?php echo $DB_Valor; ?>">
            </div>

            <div id="img-div">
            <label for="" class="infos">Link Img</label>
                <input type="text" name="imagem" value="<?php echo $DB_Imagem; ?>">
            </div>

            <div id="ingredientes-div">
            <label for="" class="infos">Ingredientes</label>
                <input type="text" name="ingredientes" value="<?php echo $DB_Ingredientes; ?>">
            
            </div>

            
    </div>
    

</div>
<input type="hidden" name="id" value="<?php echo $id; ?>">
<button type="submit" name="submit">Salvar</button>
</form>


</body>
</html>