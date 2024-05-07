<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/confirmarpedido.css">
    <title>Document</title>

   
</head>
<body>
<?php
    include_once '../navBar.php';



    
    ?>

<div class="container">
<div class="titulo">
<h1>RESUMO PEDIDO</h1>
<button name="finalizar">FINALIZAR</button>
</div>
<div class="tabela">
    <table border="1">
    <colgroup>
    <col style="width: 15%;">
    <col style="width: 55%;">
    <col style="width: 30%;">
  </colgroup>
        <tr>
    <th>QNT</th>
    <th>ITEM</th>
    <th>VALOR TOTAL</th>
        </tr>
        <tr >
        <td>$qnt</td>
        <td>$nomeprato</td>
        <td>$99,99</td>
        </tr>
    </table>
</div>
</div>
</body>
</html>