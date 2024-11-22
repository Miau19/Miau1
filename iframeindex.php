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

$url0 = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
$parameters0 = [
  'start' => '1',
  'limit' => '1',
  'convert' => 'USD'
];

$headers0 = [
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

$qs0 = http_build_query($parameters0); // query string encode the parameters
$request0 = "{$url0}?{$qs0}"; // create the request URL
$curl0 = curl_init(); // Get cURL resource
// Set cURL options
curl_setopt_array($curl0, array(
CURLOPT_URL => $request0,            // set the request URL
CURLOPT_HTTPHEADER => $headers0,     // set the headers 
CURLOPT_RETURNTRANSFER => 1         // ask for raw response instead of bool
///CURLOPT_USERAGENT => 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0'
));

$response = curl_exec($curl); // Send the request, save the response 
$datos=json_decode($response,true);

$response0 = curl_exec($curl0); // Send the request, save the response 
$datos0=json_decode($response0,true);

$dato=$datos['data'];
$dato0=$datos0['data'];

if ($_POST) {
  $simbolo = $_POST['simbolo'];//RECOGE DATO DE FORMULARIO
  $simboloMayuscula0=strtoupper($simbolo);//CONVIERTE A MAYUSCULA
  //$simboloMayuscula=trim($simboloMayuscula0);//trim ELIMINA ESPACIOS VACIOS AL INICIO Y AL FINAL
  $simboloMayuscula = str_replace(" ", "", $simboloMayuscula0);//str_replace REEMPLAZA TODOS LOS ESPACIOS VACIOS 
  
  $moneda='';
  $quote='';
  $symbol='';
  foreach ($dato as $d) {
    if ($d['symbol'] == $simboloMayuscula) {
      $moneda=$d['name'];
      $quote=$d['quote'];
      $symbol=$d['symbol'];
    } 
  }
  }
  //$simbolo=$symbol;

  $moneda0='';
  $quote0='';
  foreach ($dato0 as $d0) {
      $symbol0=$d0['symbol'];
      $quote0=$d0['quote'];
    } 

//print_r($moneda); 

curl_close($curl); // Close request

?>

<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="UTF-8">
  <title>Nombre de criptomonedas</title>
</head>
<body id="onload" onload="onload()" style="background: #000000;font-size: 1rem;color: #cacaca;"> 

<div id="reloj"  style="background: #550000;font-size: 1rem;color: #00ff00;">xxx</div>
<div id="reloj2"  style="background: #550055;font-size: 1rem;color: #00ffff;">yyy</div>

<!-- BLOQUE 1 -->
  <div style="background: #005500;">
    <div style="background: #000055;font-size: 1rem;color: #cccccc;width: 100%; height: 100px; overflow: auto;" >
   'start' => '1', 'limit' => '100': <br>
   <?php foreach($datos['data'] as $r) { 
     echo "(".$r['cmc_rank'].") " .$r['name']."&nbsp;&nbsp;".$r['symbol']."&nbsp;&nbsp;".","."&nbsp;&nbsp;";
   } 
   ?>
  </div>

  <br>
  Obtener nombre y simbolo de <?php if ($_POST) {echo "&nbsp;". $simboloMayuscula; }?>:
  <div style="display: flex;justify-content: start;align-items: center;background: #000033;">
   <p id='moneda' style="background: #000099;font-size: 2rem; margin: 0.5rem">
    <?php if ($_POST) { echo $moneda;} ?>
   </p>
   <p id='symbol' style="background: #000099;font-size: 2rem; opacity: 0.5; margin: 0.5rem">
    <?php if ($_POST) {echo "&nbsp;". $simboloMayuscula;} ?>
   </p>
   <p id='precio' style="background: #000099;font-size: 2rem; opacity: 1; margin: 0.5rem">
   </p>
  </div>
  <div id="nombre" style="display:none;background: rgb(100, 0, 0);">xxx</div><br>   

  <form action="iframeindex.php" method="post">
  Escribir simbolo:  
  <input type="text" id="simbolo" name="simbolo" style="border: solid 1px #7e7e7e;padding: 0.5rem;" value=<?php if ($_POST) {print_r($symbol);} ?> > 
  <input type="submit" id="enviar" value="Enviar"  onclick=""  style=" border: solid 1px #7e7e7e;border-radius: 25%;padding: 0.5rem;"><br><br>
  </form>
  <input type="button" id="timer" value="Stop timer" onclick="timer()" style=" border: solid 1px #7e7e7e;border-radius: 25%;padding: 0.5rem;">

  </div><br>
<!-- FIN DE:  BLOQUE 1  -->

<!-- BLOQUE 2 -->
 <div style="background: #444444;">
 <div id="symbols0" style="color: #220099;">
   <?php print_r($symbol0) ?> <?php echo '<br>' ?> 
   </div><br>
 <div id="quote0" style="color: #220099;">
   <?php print_r($quote0) ?> <?php echo '<br>' ?> 
   </div><br>
   Obtener datos de <?php if ($_POST) { echo "&nbsp;". $simboloMayuscula;} ?>:
    <div id="symbols" style="color: #ff00ff;">
   <?php if ($_POST) {print_r($symbol);} ?> <?php echo '<br>' ?> 
</div><br>
   <div id="texto0" style="color: #ff00ff;">
   <?php if ($_POST) {print_r($quote);} ?> <?php echo '<br>' ?> 
   </div><br>
   Coinmarketcap(cambio cada 60s, actualizar pagina):
   <div id="texto" style="color: #00ff00;background: rgb(12, 0, 24);   ;display: flex;justify-content: start;align-items: center;text-align: left;">
   </div><br>
 </div>
<!-- FIN DE:  BLOQUE 2  -->

<!-- <script src="index.js"></script> -->

<script>
  let TIMER=0, CONTADOR=0;
    function F1(m,n) { //FORMATEA CON n DECIMALES 
     let cadena= new String(m), rgx = /(\d+)(\d{3})/, ceros='',nuevaCadena='', decimal, d, nuevaParteEntera='', e; //console.log('cadena====',cadena);//var x = cadena.replace(/,/g,"").split(".");
     (n==undefined || n==0 || n=='')? n=Number(n) : n=Number(n)//n=2: PARA UN RETORNO CON DOS DECIMALES COMO MINIMO
     if (/[a-zA-Z]/.test(cadena)==true) { //SI ENCUENTRA LETRAS EN LA CADENA: infinity NaN isNaN 5.554680159996e+333
       return cadena; 
     }
     else {//SI ENCUENTRA SOLO NUMEROS Y UN PUNTO EN LA CADENA
         if (/[.]/.test(cadena)==true) {//SI ENCUENTRA PUNTO EN LA CADENA
             e = cadena.split('.')[0];//d: PARTE ENTERA
             d = cadena.split('.')[1];//d: PARTE DECIMAL
             if (d.length >=n) {
                 decimal = d.substring(0, n);//CORTAR CADENA DE DECIMALES A n DIGITOS  
             }
             if (d.length < n) {
                 for (let i = 1; i <= n-d.length; i++) {ceros += '0';}//COMPLETA PARTE DECIMAL CON CEROS
                 decimal = d+ceros;//console.log('decimal....',decimal);
             }
             //AGREGAR COMAS A LA PARTE ENTERA:
             for (i = 1; i <= Math.trunc(e.length/3); i++) {// trunc OBTIENE LA PARTE ENTERA DE: LA LONGITUD DE e DIVIDIDO POR 3
                 e = e.replace(rgx, '$1' + ',' + '$2');  
             } 
             (n==undefined || n==0 || n=='')? nuevaParteEntera=e+'' : nuevaParteEntera=e+'.'+decimal;
             return nuevaParteEntera;
         } 
         else {
             for (let i = 1; i <= n; i++) {ceros += '0';}//GENERAR CEROS PARA PARTE DECIMAL DE 2CADENA
             //AGREGAR COMAS A LA CADENA:
             for (let i = 1; i <= Math.trunc(cadena.length/3); i++) {// trunc OBTIENE LA PARTE ENTERA DE: LA LONGITUD DE e DIVIDIDO POR 3
                 cadena = cadena.replace(rgx, '$1' + ',' + '$2');  
             } 
             (n==undefined || n==0 || n=='')? nuevaCadena = cadena : nuevaCadena = cadena+'.'+ceros;
             return nuevaCadena;
         }
     }
    } 

    function datos() {
     /*
      {
       "data": [
          {
          "id": 1,
          "name": "Bitcoin",...
          },
          { 
          "id": 1027,
          "name": "Ethereum",...
          }
        ],
       "status":{
        } 
      }
     */ 

     /*
     @[price] => 92100.810078196
     @[volume_24h] => 72981638354.878
     @[volume_change_24h] => -4.0925
     @[percent_change_1h] => -0.97120962
     @[percent_change_24h] => 0.37430519
     @[percent_change_7d] => 3.55252826
     @[percent_change_30d] => 34.04256665
     @[percent_change_60d] => 45.56037248
     @[percent_change_90d] => 50.48512072
     @[market_cap] => 1822180265895.8
     @[market_cap_dominance] => 59.3449
     @[fully_diluted_market_cap] => 1934117011642.1
     */
     let t0=texto0.textContent.replace(/[[]/g,'@[');
       let t=t0.split('@').slice(2,14);
      let price                = t[0].replace('[price] => ','')
      ,volume_24h              = t[1].replace('[volume_24h] => ','')
      ,volume_change_24h       = t[2].replace('[volume_change_24h] => ','')
      ,percent_change_1h       = t[3].replace('[percent_change_1h] => ','')
      ,percent_change_24h      = t[4].replace('[percent_change_24h] => ','')
      ,percent_change_7d       = t[5].replace('[percent_change_7d] => ','')
      ,percent_change_30d      = t[6].replace('[percent_change_30d] => ','')
      ,percent_change_60d      = t[7].replace('[percent_change_60d] => ','')
      ,percent_change_90d      = t[8].replace('[percent_change_90d] => ','')
      ,market_cap              = t[9].replace('[market_cap] => ','')
      ,market_cap_dominance    =t[10].replace('[market_cap_dominance] => ','')
      ,fully_diluted_market_cap=t[11].replace('[fully_diluted_market_cap] => ','')
      ; 
      document.getElementById('texto').innerHTML=
       'Sin formato:'+'<br>'
      +'price                    : '+price                   +'<br>'
      +'volume_24h               : '+volume_24h              +'<br>'
      +'volume_change_24h        : '+volume_change_24h       +'<br>'
      +'percent_change_1h        : '+percent_change_1h       +'<br>'
      +'percent_change_24h       : '+percent_change_24h      +'<br>'
      +'percent_change_7d        : '+percent_change_7d       +'<br>'
      +'percent_change_30d       : '+percent_change_30d      +'<br>'
      +'percent_change_60d       : '+percent_change_60d      +'<br>'
      +'percent_change_90d       : '+percent_change_90d      +'<br>'
      +'market_cap               : '+market_cap              +'<br>'
      +'market_cap_dominance     : '+market_cap_dominance    +'<br>'
      +'fully_diluted_market_cap : '+fully_diluted_market_cap+'<br>'+'<br>'

      +'Con formato:'+'<br>'
      +'price                    : '+F1(price                   ,9)+'<br>'
      +'volume_24h               : '+F1(volume_24h              ,9)+'<br>'
      +'volume_change_24h        : '+F1(volume_change_24h       ,9)+'<br>'
      +'percent_change_1h        : '+F1(percent_change_1h       ,9)+'<br>'
      +'percent_change_24h       : '+F1(percent_change_24h      ,9)+'<br>'
      +'percent_change_7d        : '+F1(percent_change_7d       ,9)+'<br>'
      +'percent_change_30d       : '+F1(percent_change_30d      ,9)+'<br>'
      +'percent_change_60d       : '+F1(percent_change_60d      ,9)+'<br>'
      +'percent_change_90d       : '+F1(percent_change_90d      ,9)+'<br>'
      +'market_cap               : '+F1(market_cap              ,9)+'<br>'
      +'market_cap_dominance     : '+F1(market_cap_dominance    ,9)+'<br>'
      +'fully_diluted_market_cap : '+F1(fully_diluted_market_cap,9)+'<br>'
      ;/// console.log('moneda------------',document.getElementById('moneda').textContent);
      document.getElementById('precio').innerHTML=Number(price).toFixed(2);
    }
    datos();

    function quote0() {
      let t0=document.getElementById('quote0').textContent.replace(/[[]/g,'@[');
      let t=t0.split('@').slice(2,14);
      let price0 = t[0].replace('[price] => ','');
      document.getElementById('precio').innerHTML=F1(Number(price0),2);
      //document.getElementById('simbolo').value=document.getElementById('symbols').textContent.trim();
    }
    
    function simbolo() {
      document.getElementById('simbolo').value=document.getElementById('symbols').textContent.trim();
    }


    function enviar() {
      //GENERAR TIEMPO 1:
      Date.prototype.addMillisecs = function(d) { this.setTime(this.getTime() + (d)); return this; }
      var mydate0=new Date() , ss = new String(mydate0.getSeconds()); 
      document.getElementById("reloj").innerText=ss+' CONTADOR: '+CONTADOR;
      document.getElementById("enviar").click();
      //document.getElementById('simbolo').value=document.getElementById('symbols').textContent.trim();
    }
    function reloj() {
      CONTADOR=CONTADOR+1;
      Date.prototype.addMillisecs = function(d) { this.setTime(this.getTime() + (d)); return this; }
      var mydate0=new Date() , ss = new String(mydate0.getSeconds()); 
      document.getElementById("reloj").innerText='CONTADOR: '+CONTADOR;
      document.getElementById("reloj2").innerText=ss;

      console.log('moneda------------',document.getElementById('moneda').textContent,CONTADOR);
     //if (CONTADOR==2) {document.getElementById("enviar").click();}
      let e=((document.getElementById('precio').textContent.split('.'))[0]).replace(/[,]/g, '')
      ,dd=(document.getElementById('precio').textContent.split('.'))[1]
      ,a=Math.random() 
      ,n=e+'.'+(String(a).split('.'))[1];  console.log('a------------',(String(a).split('.'))[1]);///a=Math.random() * (99 - 1) + 1;
      document.getElementById('precio').innerText=F1(n,2);
     
      
    }

    var timerID; 
    function startTimer() {timerID=window.setInterval(enviar,60000);}
    function stopTimer() {clearInterval(timerID);} 
    function timer(){
      (TIMER==0)? (stopTimer(),TIMER=1,document.getElementById('timer').value='Start timer'):(startTimer(),TIMER=0,document.getElementById('timer').value='Stop timer');
    }
    
    function startTimer2() {timerID2=window.setInterval(reloj,1000);}

    function onload() {
      //startTimer(); 
      startTimer2();
    }
</script>
</body>
</html>



