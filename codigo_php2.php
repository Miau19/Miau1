<?php
  /*
  	include("abrir_conexion.php");
  
    //CONSULTAR
    $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db1");
    while($consulta = mysqli_fetch_array($resultados))
    {
      echo $consulta['nombre']."<br>";
    }
  */
  //$usuario=$_POST['usuario'];

   ///////////////////////////////////////////////////////////////////////////7
   $url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
$parameters = [
  'start' => '1', 
  'limit' => '1000',
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
  $moneda='';
  $quote='';
  $price='';
  foreach ($dato as $d) {
      //$moneda=$d['name'];
      //$quote=$d['quote'];
      if ($d['symbol']=='BTC') {
        $name=$d['name'];
        $symbol=$d['symbol'];
        $cmc_rank=$d['cmc_rank'];
        $quote=$d['quote'];
      }
      if ($d['symbol']=='XRP') {
        $quote2=$d['quote'];
      }
      if ($d['symbol']=='FARTCOIN') {
        $quote3=$d['quote'];
      }
      if ($d['symbol']=='WLD') {
        $quote4=$d['quote'];
      }
    } 
  foreach ($quote as $d) {
      $price=$d['price'];
      //$volume_24h=$d['volume_24h'];$volume_change_24h=$d['volume_change_24h'];$percent_change_1h=$d['percent_change_1h'];$percent_change_24h=$d['percent_change_24h'];$percent_change_7d=$d['percent_change_7d'];$percent_change_30d=$d['percent_change_30d'];$percent_change_60d=$d['percent_change_60d'];$percent_change_90d=$d['percent_change_90d'];$market_cap=$d['market_cap'];$market_cap_dominance=$d['market_cap_dominance'];
    }
    foreach ($quote2 as $d) {
      $price2=$d['price'];
    }
    foreach ($quote3 as $d) {
      $price3=$d['price'];
    }
    foreach ($quote4 as $d) {
      $price4=$d['price'];
    }
  }
  $nombre=$_POST['nombre'];
  //echo $nombre;
//print_r($datos); 

//print_r($quote);
//print_r($price);

echo json_encode($price.'@'.$price2.'@'.$price3.'@'.$price4);

curl_close($curl); // Close request

?> 
