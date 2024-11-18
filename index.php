<?php
$url = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
$parameters = [
  'start' => '1',
  'limit' => '50',
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
////print_r(json_decode($response)); // print json decoded response
$data=json_decode($response,true);
curl_close($curl); // Close request

//echo '<pre>';
//  print_r($response); 
//echo '</pre>';

?>

<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="UTF-8">
  <title>Formulario contactos</title>
</head>
<body style="background: #818181;font-size: 1rem;color: #cacaca;">

  <div class="row">
    <?php foreach($data['data'] as $row) { ?>
   <h4>
     <?php echo $row['symbol'] ?> (((<?php echo $row['quote'] ?>)))  ===<?php echo $row['USD'] ?>===
   </h4>
    <?php } ?>
  

  </div>

  <?php echo '<p  style="color: #00ff00;">##### HOLA MUNDO !!!!!!!!!!</p><p>HOLA MUNDO !!!!!!!!!! (index.php)</p>' ?> 
  <?php echo '<p  style="color: #ffff00;">HOLA MUNDO !!!!!!!!!!</p><p>HOLA MUNDO !!!!!!!!!! (index.php)</p>' ?>

  <h1>h1 ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡Hola Mundo#################.----------------------------------</h1>
</body>
</html>
