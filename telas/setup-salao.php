

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Botão JavaScript</title>
</head>
<body>

<button id="meuBotao">Clique Aqui</button>

<script>
  // Defina sua função JavaScript
  function minhaFuncao() {
    // Defina as dimensões desejadas
var largura = 1440; // Substitua pelo valor desejado
var altura = 960; // Substitua pelo valor desejado
// Abre uma nova janela em tela cheia com as dimensões especificadas
window.open('v-salao.php', '_blank', 'fullscreen=yes, width=' + largura + ', height=' + altura);

  }

  // Selecione o botão e adicione um ouvinte de eventos para o clique
  document.getElementById("meuBotao").addEventListener("click", minhaFuncao);
</script>

</body>
</html>
