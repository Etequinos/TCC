<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
    include_once '../navBar.php';
    ?>

<div class="onboarding-container">
  <h1>Já nos Visitou Antes?</h1>
  <p>VENHA PARTICIPAR DO CLUBE FIDELIDADE</p>

  <div class="options">
    <a href="#join-loyalty-club" class="button">Join Loyalty Club</a>
    <a href="#enter-anonymously" class="button">Enter Anonimamente</a>
  </div>

  <h2 id="join-loyalty-club">Entre no clube de fidelidade</h2>
  <p>nsira seu CPF para fazer parte do nosso clube de fidelidade e aproveitar benefícios exclusivos.</p>
  <form action="/join-loyalty-club" method="post">
    <input type="text" id="cpfInput" maxlength="14" name="cpf" placeholder="CPF" required>
    <button type="submit">Confirm</button>
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
  <h2 id="enter-anonymously">Entre  Anonimamente</h2>
  <p>Você ainda pode desfrutar de nossos serviços sem aderir ao clube de fidelidade.</p>
  <a href="/anonymous-entry" class="button">Entre anonimamente.</a>
</div>

</body>
</html>