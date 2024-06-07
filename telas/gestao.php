<?php
    include_once '../navBar-gestao.php';
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
    $user->email = 'Eteqeuinos';

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
<script>
    document.getElementById("backBtn").addEventListener("click", function() {
      window.history.back();
    });
</script>

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