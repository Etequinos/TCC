<head>
    <link rel='stylesheet' href='../css/v-salao.css'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>  
    <?php
    include_once '../navBar.php';
    include '../conecta.php';
    ?>

    <div class="content">
        <?php
        $sql = "SELECT * FROM pedidos";
        $result_pedidos = $conexao->query($sql);

        if ($result_pedidos->num_rows > 0) {
            while($row = $result_pedidos->fetch_assoc()) {
                $pedido_ID = $row['ID'];
                $pedido_Mesa_ID = $row['ID_Mesa'];
                $pedido_prato_ID = $row['ID_Prato'];
                $pedido_status = $row['status'];
                
                $sql_prato = "SELECT * FROM pratos WHERE ID = '$pedido_prato_ID'";
                $result_pratos = $conexao->query($sql_prato);
                $row_prato = $result_pratos->fetch_assoc();
                $prato_ID = $row_prato['ID'];
                $prato_Nome = $row_prato['Nome'];
                $prato_Ingredientes = $row_prato['Ingredientes'];

                echo "<div class='card-container'>
                        <div class='card-name-v'>
                            <form method='post' action='v-cozinha-delete.php'>
                                <button type='submit'>CONCLUIR</button>
                            </form>
                            <div class='container'>
                        </div>
                    </div>
                    <div>
                        <p>Prato: </p>" . $prato_Nome . "
                    </div>
                </div>";
            }
        }
        ?>
    </div>
</body>
