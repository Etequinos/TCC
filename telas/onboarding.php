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
  <form action="../validaCPF.php" method="post">
    <input type="text" id="CPF" maxlength="14" name="CPF" placeholder="" required>
  <button type="submit">Confirmar</button>
</form>
  <div class="botoes">
  

  <a href="home.php" class="button">Entre anonimamente.</a>
</div>

</body>
</html>