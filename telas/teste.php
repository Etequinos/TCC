<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/home.css">
    <title>Document</title>
</head>
<body>
<?php
include_once '../navBar.php';

include '../conecta.php';
?>
<br>
<button id="reloadBtn">Recarregar Página</button>

<script>
    document.getElementById("reloadBtn").addEventListener("click", function() {
        location.reload();
    });
</script>
<div id="cards-container">
<?php
$sql = "SELECT ID, Nome, Valor, Imagem FROM Pratos";
$result = $conexao->query($sql);
    
    if ($result->num_rows > 0) {
        // Exibe os dados em cards
        while($row = $result->fetch_assoc()) {
            echo "<head>
            <link rel='stylesheet' href='../css/cardprato.css'>
            </head>";
            echo "<div class='card-container'>";
            echo "<img src='" . $row["Imagem"] . "' alt='" . $row["Nome"] . "'>";
            echo "<label for='prato' name='nomeprato'>" . $row["Nome"] . "</label>";
            echo "<label for='prato' name='nomeprato'>" . $row["Valor"] . "</label>";
            echo "<button name='fzr_pedido'>FAZER PEDIDO</button>";
            echo "<button name='info_pedido'><a href='info_prato.php?id=" . $row["ID"] . "'>INFO</a></button>";
            echo "</div>";
        }
    } else {
        echo "0 resultados";
    }
    ?>
    </div>
    <script>
// JavaScript
function atualizarCards() {
    // Faz uma requisição AJAX para o script PHP
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Quando a resposta for recebida, atualiza os cards
            var data = JSON.parse(this.responseText);
            atualizarCardsHTML(data);
        }
    };
    xhttp.open("GET", "script_php.php", true);
    xhttp.send();
}

function atualizarCardsHTML(data) {
    var cardsContainer = document.getElementById("cards-container");
    // Limpa o conteúdo atual dos cards
    cardsContainer.innerHTML = "";

    // Itera sobre os dados recebidos e cria os cards
    data.forEach(function(item) {
        var card = document.createElement("div");
        card.textContent = "ID: " + item.id + ", Nome: " + item.nome; // Adicione aqui os campos que deseja exibir
        cardsContainer.appendChild(card);
    });
}

// Atualiza os cards a cada 5 segundos (5000 milissegundos)
setInterval(atualizarCards, 5000);
// Você pode ajustar o intervalo de tempo conforme necessário

// Chama a função pela primeira vez para carregar os cards inicialmente
atualizarCards();
</script>
</body>
</html>
