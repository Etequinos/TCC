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
                        <th>Item</th>
                        <th>Valor total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $mesa = $_SESSION['ID'];
                    $sql = "SELECT * FROM Comandas WHERE ID_Mesa = '2'";
                    $result = $conexao->query($sql);
                    $total = 0; 

                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $ID_Mesa = $row['ID_Mesa'];
                            $ID_Prato = $row['ID_Prato'];
                            $Valor_Total = $row['Valor_Total'];
                            $fidelidade = $row['Fidelidade'];

                            $sql_pratos = "SELECT * FROM Pratos WHERE ID = $ID_Prato";
                            $result_pratos = $conexao->query($sql_pratos); 

                            if ($result_pratos->num_rows > 0) {
                                while ($row_pratos = $result_pratos->fetch_assoc()) {
                                    echo "<tr>
                                        <td>" . $row_pratos['Nome'] . "</td>
                                        <td>" . $row_pratos['Valor'] . "</td>
                                    </tr>";
                                    $total += $row_pratos['Valor']; 
                                }
                            }
                        }
                    } else {
                        echo "0 resultados";
                    }
                    ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td><strong>Total:</strong></td>
                        <td><?php echo $total; ?></td> 
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
</body>
</html>
