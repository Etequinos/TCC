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
    include '../navBar.php';
    ?>
    
    <div class="login-container">
        <h1>AREA PARA GESTORES</h1>
        <form action="consulta-login.php" method="post">   
            <label for="id">Mesa</label>
            <input type="number" name="id" id="id">
            <label for="senha">Senha</label>
            <input type="text" name="senha" id="senha">
            <button type="submit">APLICAR</button>
            <br><br>
            <?php
            echo "<h1 class='erro'>" . $_SESSION['logado'] . "</h1>";
            ?>
        </form>
    </div>

     



</body>
</html>