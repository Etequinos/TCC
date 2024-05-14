<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/gestaoadd.css">
    <title>Document</title>
   
</head>
<body>
<?php
    include_once '../navBar.php';
    ?>
<div class="container">
    <div class="titulo">
        <label for="" name="titulo">Descrição do Prato</label>
    </div>
    <div class="atributos-prato">
             <div id="nome-div">
            <label for="">Nome</label>
            <form action="">
                <input type="text">
            </form>
            </div>

            <div id="desc-div">
            <label for="">Descrição</label>
            <form action="">
                <input type="text">
            </form>
            </div>

            <div id="valor-div">
            <label for="">Valor</label>
            <form action="">
                <input type="number">
            </form>
            </div>

            <div id="img-div">
            <label for="">Link Img</label>
            <form action="">
                <input type="text">
            </form>
            </div>

            <div id="ingredientes-div">
            <label for="">Ingredientes</label>
            <form action="">
                <input type="text">
            </form>
            </div>

    </div>
</div>



</body>
</html>