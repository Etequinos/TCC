<?php

$endpoint = 'https://sandbox.api.pagseguro.com/pix/pay/QRCO_56C1AE63-5223-4D98-B0DB-B275E4A5CA48';
$token = '0738CF4178A54649A08F76F9C56A9B02';

$body = [
  "reference_id"=> "ex-00001",
  "customer"=> [
    "name"=> "Jose da Silva",
    "email"=> "email@sandbox.pagseguro.com.br",
    "tax_id"=> "12345678909",
    "phones"=> [
      [
        "country"=> "55",
        "area"=> "11",
        "number"=> "999999999",
        "type"=> "MOBILE"
      ]
    ]
  ],
  "items"=> [
    [
      "name"=> "nome do item",
      "quantity"=> 1,
      "unit_amount"=> 500
    ]
  ],
  "qr_codes"=> [
    [
      "amount"=> [
        "value"=> 500
      ]
    ]
  ],
  "shipping"=> [
    "address"=> [
      "street"=> "Avenida Brigadeiro Faria Lima",
      "number"=> "1384",
      "complement"=> "apto 12",
      "locality"=> "Pinheiros",
      "city"=> "São Paulo",
      "region_code"=> "SP",
      "country"=> "BRA",
      "postal_code"=> "01452002"
    ]
  ],
  "notification_urls"=> [
    "https://meusite.com/notificacoes"
  ]
];

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $endpoint);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($body));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_HTTPHEADER, [
  'Content-Type: application/json',
  'Authorization: Bearer ' . $token
]);


$response = curl_exec($curl);
$error = curl_error($curl);

curl_close($curl);

if($error){
  var_dump($error);
  die();
}

$data = json_decode($response, true);

var_dump($data['qr_codes'][0]);

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  if($data) :
  ?>
<img src="<?php echo $data['qr_codes'][0]['links'][0]['href'] ?>" alt="">
  <?php
  endif;
  ?>
</body>
</html>