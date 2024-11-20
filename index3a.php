<?php 

$url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
$parameters = [
  'start' => '1',
  'limit' => '100',
  'convert' => 'USD'
];

$headers = [
  'Accepts: application/json',
  'X-CMC_PRO_API_KEY: cf14cf58-626e-49d9-aea8-a64c15e91dd2'
];
$qs = http_build_query($parameters); // query string encode the parameters
$request = "{$url}?{$qs}"; // create the request URL

$curl = curl_init(); // Get cURL resource
// Set cURL options
curl_setopt_array($curl, array(
  CURLOPT_URL => $request,            // set the request URL
  CURLOPT_HTTPHEADER => $headers,     // set the headers 
  CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
  ///CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0'
));

$response = curl_exec($curl); // Send the request, save the response 
$datos=json_decode($response,true);

$dato=$datos['data'];

if ($_POST) {
  $simbolo = $_POST['simbolo'];//RECOGE DATO DE FORMULARIO
  $simboloMayuscula0=strtoupper($simbolo);//CONVIERTE A MAYUSCULA
  //$simboloMayuscula=trim($simboloMayuscula0);//trim ELIMINA ESPACIOS VACIOS AL INICIO Y AL FINAL
  $simboloMayuscula = str_replace(" ", "", $simboloMayuscula0);//str_replace REEMPLAZA TODOS LOS ESPACIOS VACIOS 
  
  $moneda='';
  $quote='';
  foreach ($dato as $d) {
    if ($d['symbol'] == $simboloMayuscula) {
      $moneda=$d['name'];
      $quote=$d['quote'];
  
    } 
  }
}

//print_r($moneda); 

curl_close($curl); // Close request

?>

