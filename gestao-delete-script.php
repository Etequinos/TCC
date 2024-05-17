
<?php
    include 'conecta.php';
$id = $_POST['id'];

    $sql = "DELETE FROM pratos WHERE id = $id;";
$result = $conexao->query($sql);

header('Location: telas/gestao-menu.php');
    ?>  
