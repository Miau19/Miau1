<?php

require 'vendor/autoload.php';

use Vittominacori\CoinMarketCap\CoinMarketCap;

$client = new CoinMarketCap('cf14cf58-626e-49d9-aea8-a64c15e91dd2');

$cryptos = ['BTC', 'ETH', 'DOGE'];

foreach ($cryptos as $symbol) {
    try {
        $data = $client->cryptocurrency()->quotesLatest(['symbol' => $symbol]);
        $price = $data['data'][$symbol]['quote']['USD']['price'];
        echo "$symbol: $" . number_format($price, 2) . "\n";
    } catch (\Exception $e) {
        echo "Error fetching $symbol: " . $e->getMessage() . "\n";
    }
}
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Formulario contactos</title>
</head>
<body style="background: #818181;font-size: 2rem;">
  <?php echo '<p  style="color: #00ff00;">##### HOLA MUNDO !!!!!!!!!!</p><p>HOLA MUNDO !!!!!!!!!! (index.php)</p>' ?> 
  <?php echo '<p  style="color: #ffff00;">HOLA MUNDO !!!!!!!!!!</p><p>HOLA MUNDO !!!!!!!!!! (index.php)</p>' ?>

  <h1>h1 ¡Hola Mundo!></h1>
</body>
</html>
