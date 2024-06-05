<?php
    include_once '../navBar.php';
    require '../config.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/gestao.css">
    <title>Document</title>
</head>
<body>

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

    <div class="gestao-container">
    <h1>Mostre ao Atendente</h1>
    <h3>Insira o código para confirmar o pagamento</h3>
    <h2>Código</h2>
    <form method="post" action="valida-pagamento.php">
    <input type="password" name="code" id="code">
    <button type="submmit" name="confirma" value="Verify" >Confirmar</button>  
    </form>
    <?php

if(isset($erro)){
$erro = $_GET['erro'];
if($erro == 'true'){
    echo "Código incorreto, chame um atendente para validar o pagamento";
}
}
?>
    </div>
</body>
</html>