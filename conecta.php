<?php
// informações para conectar
$host = "localhost"; 
$usuario = "root"; 
$senha = ""; // deixem em branco por agora
$banco_de_dados = "tcc"; 


$conexao = new mysqli($host, $usuario, $senha, $banco_de_dados);

// Verifica conexão
if ($conexao->connect_error) {
    die("Erro de conexão: " . $conexao->connect_error);
}

echo "Conexão bem-sucedida";

// anotações do lucas
//  $sql = "SELECT * FROM mesa";
// $resultado = $conexao->query($sql);
// if ($resultado->num_rows > 0) {
//    while($row = $resultado->fetch_assoc()) {
// 
//          echo "Campo1: " . $row["ID"]. " - Campo2: " . $row["senha"]. "<br>";
//     }
// } else {
//      echo "0 resultados";
//  }
// 
?>
