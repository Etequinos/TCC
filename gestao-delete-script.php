
<?php
    include 'conecta.php';
$id = $_POST['id'];

    $sql = "UPDATE pratos SET status = '1' WHERE ID = $id";
$result = $conexao->query($sql);

header('Location: telas/gestao-menu.php');
    ?>  
