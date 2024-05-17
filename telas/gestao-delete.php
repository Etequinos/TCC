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
$id = $_GET['id'];
//isso somente se for confirmado\\
    $sql = "DELETE FROM pratos WHERE id = $id;";
$result = $conexao->query($sql);
//isso somente se for confirmado\\

    
    ?>  


</body>
</html>