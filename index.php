<?php
require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head><center>
<body>
    <a href="telas/gestao.php">Gestão</a>
    <br>
    <a href="telas/v-cozinha.php">Cozinha</a>
    <br>
    <a href="telas/v-salao.php">Salão</a>
    <br>
    <a href="telas/destaques.php">Clientes</a>
    <br>
    <br>
    <br>
    <form action="mesa.php" method="post">
        <label for="">Numero de Mesas no restaurante:</label>
        <br>
        <input type="number" name="mesas" id="mesas">
        <br><br>

        <label for="">Senha dos atendentes:</label>
        <br>
        <input type="text" disabled value="<?php echo $senha_salao ?>">
        <br>
        <label for="">Nome do Restaurante:</label>
        <br>
        <input type="text" disabled value="<?php echo $nome_do_restaurante ?>">
        <br>
        <label for="">Senha para definir mesas:</label>
        <br>
        <input type="text" disabled value="senha">
        <br>
        <label for="">Senha para acessar o menu da Gestão:</label>
        <br>
        <input type="text" disabled value="admin128">
        <br>
        <label for="">Login para acessar o menu da Gestão:</label>
        <br>
        <input type="text" disabled value="128">
        <br>




    </form>
</body></center>
</html>