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
    <h1>RESUMO PEDIDO</h1>
    <button name="finalizar">FINALIZAR</button>
    </div>

    <div class="tabela">
    <div class='conteudo'>
<table class="content-table">
        <thead>
          <tr>
            <th>Quantidade</th>
            <th>Item</th>
            <th>Valor unidade</th>
            <th>Valor total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>pao</td>
            <td>30</td>
            <td>30</td>
          </tr>
          
          </div> 
          
        </tbody>
      </table>
    </div>
</div>
</body>
</html>