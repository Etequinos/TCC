<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/onboarding.css">
    <title>Document</title>
</head>
<body>
    <?php
    include_once '../navBar.php';
    ?>

<div class="onboarding-container">
  <h1>Já nos visitou antes?</h1>
  <p>VENHA PARTICIPAR DO CLUBE FIDELIDADE</p>
<br>

  <form action="/join-loyalty-club" method="post">
    <p>CPF</p>
    <input type="text" id="cpfInput" maxlength="14" name="cpf" placeholder="CPF" required>
    <button type="submit">Confirmar</button>
  </form>
  <script>
document.getElementById('cpfInput').addEventListener('input', function (event) {
  let cpf = event.target.value.replace(/\D/g, ''); // Remove caracteres não numéricos

  if (cpf.length > 11) {
    cpf = cpf.slice(0, 11); // Limita o tamanho do CPF a 11 dígitos
  }

  cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2'); // Adiciona o primeiro ponto
  cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2'); // Adiciona o segundo ponto
  cpf = cpf.replace(/(\d{3})(\d{1,2})$/, '$1-$2'); // Adiciona o traço

  event.target.value = cpf;
});
</script>
  <a href="/anonymous-entry" class="button">Entre anonimamente.</a>
</div>

</body>
</html>