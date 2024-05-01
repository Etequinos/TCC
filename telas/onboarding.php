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
<div id="cpf" >  
  <p>CPF</p>
  </div>
  <form action="#" method="post">
    <input type="text" id="cpfInput" maxlength="14" name="cpf" placeholder="" required>
  </form>
  <div class="botoes">
  <button type="submit">Confirmar</button>
  <script>
document.getElementById('cpfInput').addEventListener('input', function (event) {
  let cpf = event.target.value.replace(/\D/g, ''); 
  if (cpf.length > 11) {
    cpf = cpf.slice(0, 11); 

  cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2'); 
  cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2'); 
  cpf = cpf.replace(/(\d{3})(\d{1,2})$/, '$1-$2'); 

  event.target.value = cpf;
});
</script>
  <a href="/anonymous-entry" class="button">Entre anonimamente.</a>
</div>

</body>
</html>