<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require 'vendor/autoload.php';


?>

</body>
</html>
=======
<?php
require_once 'vendor/autoload.php';

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;

// Função para adicionar campos formatados no payload
function addField($id, $value) {
    $size = str_pad(strlen($value), 2, '0', STR_PAD_LEFT);
    return $id . $size . $value;
}

// Função para gerar o payload do Pix
function generatePixPayload($pixKey, $merchantName, $merchantCity, $amount, $txId) {
    $pixKey = addField('01', $pixKey);
    $merchantAccount = '26' . str_pad(strlen($pixKey), 2, '0', STR_PAD_LEFT) . $pixKey;
    $merchantName = addField('59', $merchantName);
    $merchantCity = addField('60', $merchantCity);
    $txId = addField('05', $txId);
    $amount = addField('54', number_format($amount, 2, '.', ''));

    $payload = '000201' .
               '010212' .
               '26' . strlen($merchantAccount) . $merchantAccount .
               '52040000' .
               '5303986' .
               $amount .
               $merchantName .
               $merchantCity .
               $txId .
               '6304'; // CRC placeholder

    // Calcular CRC16
    $payload .= crc16($payload);

    return $payload;
}

// Função para calcular CRC16
function crc16($str) {
    $crc = 0xFFFF;
    for ($x = 0; $x < strlen($str); $x++) {
        $crc ^= ord($str[$x]) << 8;
        for ($y = 0; $y < 8; $y++) {
            if (($crc & 0x8000) != 0) {
                $crc = ($crc << 1) ^ 0x1021;
            } else {
                $crc = $crc << 1;
            }
        }
    }
    return strtoupper(dechex($crc & 0xFFFF));
}

// Defina os parâmetros do Pix
$pixKey = '24001140802';
$merchantName = 'Lucas José Campos da Rocha';
$merchantCity = 'São Paulo';
$amount = 10.00; // valor
$txId = 'ID-de-Transacao'; // ID de transação

// Gerar o payload do Pix
$payload = generatePixPayload($pixKey, $merchantName, $merchantCity, $amount, $txId);

// Gerar o código QR
$qrCode = new QrCode($payload);
$writer = new PngWriter();
$qrCodeImage = $writer->write($qrCode);

// Salvar o QR code em um arquivo (opcional)
//$qrCodeImage->saveToFile('qrcode.png');

// Exibir diretamente na página web
header('Content-Type: '.$qrCodeImage->getMimeType());
echo $qrCodeImage->getString();
?>
>>>>>>> 3bcb0a004e5c995c4fed8cfba8dedfa3095b3e5b
