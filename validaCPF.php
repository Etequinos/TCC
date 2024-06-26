<body>
    <?php
    include_once 'conecta.php';
    ?>

    <?php
    function validate_cpf($cpf) {
        $cpf = preg_replace('/[^0-9]/', '', $cpf);

        if (strlen($cpf) != 11) {
            return false;
        }

        $sum = 0;
        for ($i = 0; $i < 9; $i++) {
            $sum += $cpf[$i] * (10 - $i);
        }
        $digit1 = ($sum % 11 < 2) ? 0 : 11 - ($sum % 11);

        $sum = 0;
        for ($i = 0; $i < 10; $i++) {
            $sum += $cpf[$i] * (11 - $i);
        }
        $digit2 = ($sum % 11 < 2) ? 0 : 11 - ($sum % 11);

        if ($cpf[9] == $digit1 && $cpf[10] == $digit2) {
            return true;
        } else {
            return false;
        }
    }

    $cpf = $_POST["CPF"];
    if (validate_cpf($cpf)) {
        $sql = "SELECT * FROM clientes WHERE CPF = '$cpf'";
        $resultado = $conexao->query($sql);

        if ($resultado->num_rows > 0) {
            $row = $resultado->fetch_assoc();
            $visitas = $row["Fidelidade"] + 1;
            $ID = $row["ID"];
            $sql = "UPDATE clientes SET Fidelidade = $visitas WHERE ID = $ID";
            $resultado = $conexao->query($sql);
        } else {
            $sql = "INSERT INTO clientes (ID, CPF, Fidelidade) VALUES (NULL, '$cpf', 1)";
            $resultado = $conexao->query($sql);
        }
        header('Location: telas/home.php');
    } else {
        echo "CPF inválido!";
    }
    ?>
</body>
