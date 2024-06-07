<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
    

    <link rel="stylesheet" href="../css/infoPrato.css">
    <title>Document</title>

   
</head>
<body>
<?php
    include_once '../navBar.php';
    include '../conecta.php';    
    ?>
    

    <div class="infoPrato-container">

        <div class="btn">
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
    </div>
    <script>
        document.getElementById("backBtn").addEventListener("click", function() {
        window.history.back();
        });
    </script>

<?php
$id = $_GET['id'];

$sql = "SELECT * FROM Pratos WHERE ID = $id";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<head>
        <link rel='stylesheet' href='../css/cardprato.css'>
        </head>";
        echo "<div class='card-container'>";
        echo "<img src='" . $row["Imagem"] . "' alt='" . $row["Nome"] . "'>";
        echo "<label for='prato' name='nomeprato'>" . $row["Nome"] . "</label>";
        echo "<label for='prato' name='nomeprato'>" . $row["Valor"] . "</label>";
        echo "<button name='fzr_pedido'><a name='pedir' href='enviar-pedido-script.php?id=" . $id . "'>FAZER PEDIDO</a></button>";
        echo "";
        echo "</div>";
        $descricao = $row["Descricao"];
        $ingredientes = $row["Ingredientes"];
        $nome = $row["Nome"];
    }
} else {
    echo "0 resultados";
}
    ?>
    
    <Div class="informacao">
    <h1><?php echo $nome; ?></h1>
    <div class="">
    <label for="ingredientes" name="ingredientes"><?php echo $descricao; ?></label>
    <?php echo $ingredientes; ?>
    </div>
</Div>
</div>
 
</body>
</html>