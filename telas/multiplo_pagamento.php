<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/mult_pagamento.css">
    <title>Document</title>

   
</head>
<body>
<?php
    include_once '../navBar.php';



    
    ?>
    <div class="pagamento">
        <div class="titulo">
<h1>COMPARTILHAR PAGAMENTO</h1>
</div>
<div class="conteudo">
    <div class="valorttl">
        <label for="" class="valores">VALOR TOTAL</label>
        <label for="" name="valor">$valor</label>
    </div>

    <div class="numero">
<label for="" class="valores">NÚMERO DE PESSOAS</label>
    <input type="number" name="pessoas" id="">

    </div>
    <div class="valorpessoa">
<label for="" class="valores">VALOR POR PESSOA</label>
<label for="" name="dividido">$dividido</label>
</div>
<label for="" class="valores">FORMAS DE PAGAMENTO</label>
</div>
<div class="imagem">
<img src="../imagens/download.png" alt="">
</div>
</div>
    </div>
    <div class="botoes">
    <button id="add" type="button" href="onboarding.php">CANCELAR</button>
    <form action="pagamento">
    <button id="add" type="submit"> CONFIRMAR PAGAMENTO</button>
    </form>
</div>
</body>
</html>