<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="../css/pedido-enviado.css">
    <title>Document</title>
</head>
<body>
<?php
include_once '../navBar.php';
?>
    <script>

    function redirecionar() {
        window.location.href = "offboarding.php"; 
    }

    window.onload = function() {
        setTimeout(redirecionar, 5000); //milissegundos
    };
</script>
<h1>SEU Pagamento FOI COMPUTADO!!!</h1>
</body>
</html>