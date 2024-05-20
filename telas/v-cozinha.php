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

    <div class="content"><?php
    $sql = "SELECT * FROM Pedidos";
    $result = $conexao->query($sql);
    if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    $pedido_ID = $row['ID'];
    $pedido_Mesa_ID = $row['ID_Mesa'];
    $pedido_prato = $row['ID_Prato'];
    $pedido_status = $row['status'];
    
    }
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='card-container'>
        <div class='card-name-v'>
            <label for='prato' name='mesa'>$pedido_Mesa_ID</label>
            <input type='checkbox' id='cbx1' style='display: none;'>
            <label for='cbx1' class='check'>
            <svg width='18px' height='18px' viewBox='0 0 18 18'>
            <path d='M 1 9 L 1 9 c 0 -5 3 -8 8 -8 L 9 1 C 14 1 17 5 17 9 L 17 9 c 0 4 -4 8 -8 8 L 9 17 C 5 17 1 14 1 9 L 1 9 Z'></path>
            <polyline points='1 9 7 14 15 4'></polyline>
            </svg>
            </label>
            <div class='container'>
           
        </div>
    </div>
    <div>
    <p>Quant</p>  
    <p>Prato</p>
    </div>
    <div>
    <p>Quant</p>  
    <p>Prato</p>
    </div>
    <div>
    <p>Quant</p>  
    <p>Prato</p>
    </div>
    <div>
    <p>Quant</p>  
    <p>Prato</p>
    </div>
    <div>
    <p>Quant</p>  
    <p>Prato</p>
    </div>
</div>";
    }
} else {
    echo "0 resultados";
}
?>
        <div class="card-container">
                <div class="card-name-v">
                    <label for="prato" name="mesa">$Mesa</label>
                    <input type="checkbox" id="cbx1" style="display: none;">
                    <label for="cbx1" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                    <path d="M 1 9 L 1 9 c 0 -5 3 -8 8 -8 L 9 1 C 14 1 17 5 17 9 L 17 9 c 0 4 -4 8 -8 8 L 9 17 C 5 17 1 14 1 9 L 1 9 Z"></path>
                    <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                    </label>
                    <div class="container">
                   
                </div>
            </div>
            <div>
            <p>Quant</p>  
            <p>Prato</p>
            </div>
            <div>
            <p>Quant</p>  
            <p>Prato</p>
            </div>
            <div>
            <p>Quant</p>  
            <p>Prato</p>
            </div>
            <div>
            <p>Quant</p>  
            <p>Prato</p>
            </div>
            <div>
            <p>Quant</p>  
            <p>Prato</p>
            </div>
        </div>
        <div class="card-container">
            <div class="card-name-b">
            <label for="prato" name="mesa">$Mesa</label>
            <input type="checkbox" id="cbx2" style="display: none;">
                    <label for="cbx2" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                    <path d="M 1 9 L 1 9 c 0 -5 3 -8 8 -8 L 9 1 C 14 1 17 5 17 9 L 17 9 c 0 4 -4 8 -8 8 L 9 17 C 5 17 1 14 1 9 L 1 9 Z"></path>
                    <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                    </label>
                   
            </div>
            <div>
            <p>Quant</p>  
            <p>Prato</p>
            </div>
            <div>
            <p>Quant</p>  
            <p>Prato</p>
            </div>
            <div>
            <p>Quant</p>  
            <p>Prato</p>
            </div>
            <div>
            <p>Quant</p>  
            <p>Prato</p>
            </div>
            <div>
            <p>Quant</p>  
            <p>Prato</p>
            </div>
        </div>
        <div class="card-container">
            <div class="card-name-r">
                <label for="prato" name="mesa">$Mesa</label>
                <input type="checkbox" id="cbx3" style="display: none;">
                    <label for="cbx3" class="check">
                    <svg width="18px" height="18px" viewBox="0 0 18 18">
                    <path d="M 1 9 L 1 9 c 0 -5 3 -8 8 -8 L 9 1 C 14 1 17 5 17 9 L 17 9 c 0 4 -4 8 -8 8 L 9 17 C 5 17 1 14 1 9 L 1 9 Z"></path>
                    <polyline points="1 9 7 14 15 4"></polyline>
                    </svg>
                    </label>
            </div>
            <div>
            <p>Quant</p>  
            <p>Prato</p>
            </div>
            <div>
            <p>Quant</p>  
            <p>Prato</p>
            </div>
            <div>
            <p>Quant</p>  
            <p>Prato</p>
            </div>
            <div>
            <p>Quant</p>  
            <p>Prato</p>
            </div>
            <div>
            <p>Quant</p>  
            <p>Prato</p>
            </div>
        </div>
        </div>
    

</body>