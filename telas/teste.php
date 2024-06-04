<?php

// Inclua o arquivo de configuração
require '../config.php';
require '../vendor/autoload.php';

use Endroid\QrCode\QrCode;

// Gere o texto do payload do PIX
$payload = '00020101021126500014BR.GOV.BCB.PIX01141' . $beneficiarioChavePix . '520400005303986540512.345802BR5929' . $beneficiarioNome . '6009' . $beneficiarioCidade . '62300593*****6304';

// Adicione o valor ao payload (formato aceito pelo PIX)
$payload .= sprintf('54%s05%s', str_pad(strlen($valor), 2, '0', STR_PAD_LEFT), $valor);

// Crie um objeto QrCode com o payload
$qrCode = new QrCode($payload);

// Defina o tamanho do QR code
$qrCode->setSize(300);

// Defina o formato da imagem
$qrCode->setWriterByName('png');

// Salve o QR code em um arquivo temporário
$tempFilename = tempnam(sys_get_temp_dir(), 'qr_code_');
$qrCode->writeFile($tempFilename);

// Exiba a imagem diretamente no navegador
header('Content-Type: image/png');
readfile($tempFilename);

// Remova o arquivo temporário
unlink($tempFilename);


// Incluir Composer

// Criar a variável com a URL para o QRCode


// Imprimir o título


// Gerar QRCode: instanciar a classe QRCode e enviar os dados para o render gerar o QRCode
$qrcode = (new \chillerlan\QRCode\QRCode())->render($payload);
//var_dump($qrcode);

// Imprimir o QRCode
echo "<img src='$qrcode'>";