<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/offboarding.css">
    <title>Document</title>

   
</head>
<body>
<?php
include_once '../navBar.php';
?>
    
<h1>VOLTE SEMPRE!!!</h1>
<script>

function redirecionar() {
    window.location.href = "destaques.php"; 
}

window.onload = function() {
    setTimeout(redirecionar, 5000); //milissegundos
};
</script>
</body>
</html>