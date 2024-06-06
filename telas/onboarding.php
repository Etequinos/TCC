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
    <input type="text" id="CPF" maxlength="14" name="CPF" placeholder="" required oninput="formatarCPF(this)">
  <button type="submit">Confirmar</button>
</form>
  <div class="botoes">
  

  <a href="home.php" class="button">Entre anonimamente.</a>
</div>
<script>
        function formatarCPF(cpfInput) {
            let cpf = cpfInput.value.replace(/[^\d]/g, '');
            cpf = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
            cpfInput.value = cpf;
        }
    </script>
    <script>
    var timeoutId;

    function redirecionar() {
        window.location.href = "destaques.php"; 
    }

    function resetarTemporizador() {
        clearTimeout(timeoutId); 
        timeoutId = setTimeout(redirecionar, 15000); 
    }

    window.onload = function() {
        timeoutId = setTimeout(redirecionar, 15000); 
        document.body.addEventListener('click', resetarTemporizador); 
    };
</script>
</body>
</html>