<?php include 'conecta.php'; 
session_start();

  $sql = "SELECT * FROM Mesa";
 $resultado = $conexao->query($sql);
 if ($resultado->num_rows > 0) {
    while($row = $resultado->fetch_assoc()) {
 
    //      echo "Campo1: " . $row["ID"]. " - Campo2: " . $row["Status"]. "<br>";
          $mesa = $row["ID"];
     }
 } else {
      // sem resultados
  }

?>
<head>
    <link rel='stylesheet' href='../css/navbar.css'>
</head>
    <nav class='nav-bar'>
        <img src='../imagens/logo.jpg' alt='Logotipo do restaurante' class='nav-logo'>
        <label class='nav-label'>{Nome do Restaurante}</label>
        <div class='nav-mesa'>
            <button class='nav-btn' onclick="logout()">
                <label>
                     <?php echo "MESA:" . $_SESSION['ID']; ?>
                </label>
            </button>
        </div>
    </nav>
<script>
    function logout() {
    window.location.href = "login.php";
    }
    </script>