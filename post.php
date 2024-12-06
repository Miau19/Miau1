<?php 

  $usuario=$_POST['usuario'];
  /*
    $pass=$_POST['pass'];
    echo json_encode('correcto: <br>usuario:'.$usuario.'<br>pass:'.$pass);
  */

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
    foreach ($dato as $d) {
      if ($d['cmc_rank']==1) {
        $name0=$d['name'];
        $symbol0=$d['symbol'];
        $cmc_rank0=$d['cmc_rank'];
        $quote0=$d['quote'];
      }
      if ($d['symbol']==$usuario) {
        $name=$d['name'];
        $symbol=$d['symbol'];
        $cmc_rank=$d['cmc_rank'];
        $quote=$d['quote'];
      }
      $arr1.=$d['symbol'].',';//*array_push($arr, $d['symbol']); 
      $arr2 = substr($arr1, 0, -1);//eliminar ultimo caracter
    } 
    foreach ($quote0 as $d) {
      $price0=$d['price'];
      $volume_24h0=$d['volume_24h'];$volume_change_24h0=$d['volume_change_24h'];$percent_change_1h0=$d['percent_change_1h'];$percent_change_24h0=$d['percent_change_24h'];$percent_change_7d0=$d['percent_change_7d'];$percent_change_30d0=$d['percent_change_30d'];$percent_change_60d0=$d['percent_change_60d'];$percent_change_90d0=$d['percent_change_90d'];$market_cap0=$d['market_cap'];$market_cap_dominance0=$d['market_cap_dominance'];
    }
    foreach ($quote as $d) {
      $price=$d['price'];
      $volume_24h=$d['volume_24h'];$volume_change_24h=$d['volume_change_24h'];$percent_change_1h=$d['percent_change_1h'];$percent_change_24h=$d['percent_change_24h'];$percent_change_7d=$d['percent_change_7d'];$percent_change_30d=$d['percent_change_30d'];$percent_change_60d=$d['percent_change_60d'];$percent_change_90d=$d['percent_change_90d'];$market_cap=$d['market_cap'];$market_cap_dominance=$d['market_cap_dominance'];
    }  
  }

  //print_r($quote);

  //echo  $name . ",<br>" . $symbol . ",<br>". $price . ",<br>". $volume_24h . ",<br>" . $volume_change_24h . ",<br>" . $percent_change_1h . ",<br>"      . $percent_change_24h . ",<br>" . $percent_change_7d . ",<br>" . $percent_change_30d . ",<br>" . $percent_change_60d . ",<br>" . $percent_change_90d . ",<br>" . $market_cap . ",<br>" . $market_cap_dominance . "<br>";
  //echo json_encode('price: '.$price.'name: '.$name.'symbol: '.$symbol.'volume_24h: '.$volume_24h  .'volume_change_24h: '.$volume_change_24h.'percent_change_1h: '.$percent_change_1h        .'percent_change_24h: '.$percent_change_24h  .'percent_change_7d: '.$percent_change_7d.'percent_change_30d: '.$percent_change_30d       .'percent_change_60d: '.$percent_change_60d        .'percent_change_90d: '.$percent_change_90d  .'market_cap: '.$market_cap.'market_cap_dominance: '.$market_cap_dominance);
  //echo json_encode('<br>name: '.$name.'<br>symbol: '.$symbol.'<br>price: '.$price 
  //  .'<br>volume_24h: '.$volume_24h  .'<br>volume_change_24h: '.$volume_change_24h.'<br>percent_change_1h: '.$percent_change_1h        .'<br>percent_change_24h: '.$percent_change_24h  .'<br>percent_change_7d: '.$percent_change_7d.'<br>percent_change_30d: '.$percent_change_30d       .'<br>percent_change_60d: '.$percent_change_60d        .'<br>percent_change_90d: '.$percent_change_90d  .'<br>market_cap: '.$market_cap.'<br>market_cap_dominance: '.$market_cap_dominance
  //);
  echo json_encode($cmc_rank0.','. $name0.','.$symbol0.','.$price0.','.$volume_24h0  .','.$volume_change_24h0.','.$percent_change_1h0 .','.$percent_change_24h0  .','.$percent_change_7d0.','.$percent_change_30d0.','.$percent_change_60d0.','.$percent_change_90d0  .','.$market_cap0.','.$market_cap_dominance0
  .'@'.$cmc_rank.','. $name.','.$symbol.','.$price.','.$volume_24h  .','.$volume_change_24h.','.$percent_change_1h .','.$percent_change_24h  .','.$percent_change_7d .','.$percent_change_30d.','.$percent_change_60d.','.$percent_change_90d  .','.$market_cap.','.$market_cap_dominance
  .'@'.$arr2);

  curl_close($curl); // Close request
 

?>
