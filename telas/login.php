<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Document</title>
   
</head>
<body>
<?php
    include_once '../navBar.php';
    ?>
    
    <div class="login-container">
        <div class="titulo">
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
<div class="m">
        <h1>AREA PARA GESTORES</h1>
        </div>
        </div>
        <form action="consulta-login.php" method="post">   
            <p>Mesa</p>
            <input type="number" name="id" id="id">
            <p for="senha">Senha</p>
            <input type="password" name="senha" id="senha">
            <button id="add" type="submit">APLICAR</button>
            <br><br>
            <?php
            echo "<h1 class='erro'>" . $_SESSION['logado'] . "</h1>";
            ?>
        </form>
    </div>
    <script>
    var timeoutId;

    function redirecionar() {
        window.location.href = "onboarding.php"; 
    }

    function resetarTemporizador() {
        clearTimeout(timeoutId); 
        timeoutId = setTimeout(redirecionar, 30000); 
    }

    window.onload = function() {
        timeoutId = setTimeout(redirecionar, 30000); 
        document.body.addEventListener('click', resetarTemporizador); 
    };
</script>



</body>
</html>