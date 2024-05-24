<?php
    include_once '../navBar.php';
    ?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require '../vendor/autoload.php';
use PragmaRX\Google2FA\Google2FA;
$_g2fa = new Google2FA();



if (!isset($_SESSION['g2fa_user'])) {
    $user = new stdClass();
    $user->google2fa_secret = "CRBRT55RJS4DYBZB";
    $user->email = 'username';

    $_SESSION['g2fa_user'] = $user;
} else {
    $user = $_SESSION['g2fa_user'];
}

$app_name = 'TCC';

$qrCodeUrl = $_g2fa->getQRCodeUrl(
    $app_name,
    $user->email,
    $user->google2fa_secret
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/gestao.css">
    <title>Document</title>
</head>
<body>

    <div class="gestao-container">
    <h1>LOGIN</h1>
    <h2>Código</h2>
    <form method="post">
    <input type="number" name="otp" id="otp">
    <button type="button" name="confirma" value="Verify" onclick="verify_otp();" >Confirmar</button>
    </form>
    </div>

    <script>
    const verify_otp = async () => {
        let otp = document.getElementById('otp').value;
        fetch('../verify.php?otp=' + otp)
            .then((response) => response.json())
            .then((data) => {
                console.log(data)
                if (data.result == true) {
                    window.location.href = "gestao-menu.php";
                } else{
                    alert("Código incorreto, tente novamente (DENNY ACCESS)");
                }
            });
    }
</script>
</body>
</html>