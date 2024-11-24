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
//SELECCIONAR MONEDA PRIMERO EN EL RANKING('limit' => '1'), SU cmc_rank SERA: 1, PARA ESTA TEMPORADA LE CORRESPONDE AL Bitcoin: 
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

//DATOS PARA IMPRIMIR AL CARGAR LA PAGINA: 
$name0='';
$symbol0='';
$quote0='';
foreach ($dato0 as $d0) {
  $name0=$d0['name'];
  $symbol0=$d0['symbol'];
  $quote0=$d0['quote'];
} 

if ($_POST) {//ESTA CONDICION ES PARA EVITAR ERROR AL ENVIAR ...
  $simbolo = $_POST['simbolo'];//RECOGE DATO DE FORMULARIO
  $simboloMayuscula0=strtoupper($simbolo);//CONVIERTE A MAYUSCULA
  $simboloMayuscula = str_replace(" ", "", $simboloMayuscula0);//str_replace REEMPLAZA TODOS LOS ESPACIOS VACIOS 
  $name='';
  $symbol='';
  $quote='';
  foreach ($dato as $d) {
    if ($d['symbol'] == $simboloMayuscula) {
      $name=$d['name'];
      $symbol=$d['symbol'];
      $quote=$d['quote'];
    } 
  }
} 

curl_close($curl); // Close request
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="UTF-8">
  <title>Nombre de criptomonedas</title>
<style type="text/css">
  @import url('https://fonts.googleapis.com/css2?family=Saira:ital,wght@0,100..900;1,100..900&display=swap');
  /* 
  @font-face {font-family: "Saira Expanded";src: url("Saira_Expanded-Bold.ttf");}
  @font-face {font-family: "Saira Expanded SemiBold";src: url("Saira_Expanded-SemiBold.ttf");}
  */  
  :root{   
      --html-color: hsla(240, 100%, 6%, 1.0);
      --bg-color:rgb(28, 28, 28);           /* PARA INICIAR EN MODO CLARO CAMBIAR A: hsl(0, 0%, 14%) */
      --bg-card-color: rgb(17, 17, 17);      /* PARA INICIAR EN MODO CLARO CAMBIAR A: hsl(0, 0%, 11%) */
      --pr1mary-color: rgb(192, 192, 192);/* PARA INICIAR EN MODO CLARO CAMBIAR A: hsl(228, 100%, 30%) */
      --text-color:rgba(234, 234, 234, 0.75);    /* PARA INICIAR EN MODO CLARO CAMBIAR A: hsl(214, 7%, 79%) */
      --border-color: rgb(169, 169, 169);
      --border-tr-color: rgba(193, 193, 193, 0.5);
      --border-radius_tex: 0.5rem;  /* PARA ARCO INTERNO */
      --border-radius: 0.75rem;  /* PARA ARCO EXTERNO (ARCO INTERNO + PADDING)*/
      --transition: color 0.1s, background-color 0.6s ease-in-out;
      --font-family1: 'Saira', 'Saira Expanded SemiBold', sans-serif;/*font-family: "Roboto", sans-serif;*/ /*font-family: Impact, sans-serif;'Times New Roman'; 'Consolas'; 'Oswald'*/
      --font-family2: 'Saira', 'Saira Expanded SemiBold', sans-serif; /*PARA NUMEROS*/ 
      --font-size1: 0.9rem;/*TAMAÑO TEXTO NORMAL --font-size1: 0.80rem;*/ 
      --font-size2: 1.35rem; /*TAMAÑO PARA SUB TITULOS --font-size2: 0.86rem;*/ 
      --font-size3: 1rem; /*TAMAÑO PARA TITULOS --font-size3: 1.25rem; */
      --font-size4: 0.70rem; /*TAMAÑO PARA TELEF CON WIDTH 320PX --font-size4: 0.8rem; */
      --font-size5: 0.64rem;/* PARA @media screen and  (max-width: 320px) */
      --font-size6: 0.85rem;/* PARA NOMBRE DE CRIPTOMONEDA EN CARDs */
  
      --font-weight1: 700;  /*GROSOR PARA TEXTO TITULOS*/ 
      --font-weight2: 900;  /*GROSOR TEXTO NORMAL*/
      --box-shadow1: 0 0 2px var(--border-color); /* --box-shadow1: none . Elimina (o simplemente no establece) sombra en un elemento.*/
      --box-shadow2: 0 0 4px var(--border-color); /* --box-shadow1: none . Elimina (o simplemente no establece) sombra en un elemento.*/
   
      --paddingC1: 0.250rem 0;  /* padding para celdas de cTable1: #celda_c1... */
      --paddingC2: 0.55rem 1rem;/* padding para .btnArrowUp... */
      /* VALORES PARA CONTROL DE LISTA DE OPCIONES: */
      --height_LO1: 1.8rem;--height_LO2: 1.5rem;--height_LO3: 1.5rem;
      --width_LO1: 12rem;--width_LO2: 10rem;--width_LO3: 6.5rem;
      --n: 0.6rem;
      /*FIN DE: VALORES PARA CONTROL DE LISTA DE OPCIONES */
      --widhtSvg: 0.5rem; --heightSvg: 0.5rem; /* VALORES PARA LOS svg DE TABLAS*/
      --button-color: rgb(1, 61, 225);/* --button-color: rgb(1, 61, 225); */
      --n2:20px; --n3:20px;    
  }
  
  .precio{
  font-family: var(--font-family1);font-weight: var(--font-weight2); 
  font-size: 2rem;font-weight: 400; opacity: 1;padding: 0; margin: 0rem;
  color: #ff0000;
  }
</style>

</head>
<body id="onload" onload="onload()" style="background: #111111;font-size: 1rem;color: #cacaca;"> 
 <div style="display: flex;justify-content: start;align-items: center;">
   <div id="reloj"  style="background: #550000;font-size: 1rem;color: #00ff00;">00</div>
   <input type="button" id="timer" value="Stop timer" onclick="timer()" style="background: #00aaaa; border: solid 1px #7e7e7e;border-radius: 6px;padding: 0.25rem;margin: 0.25rem;">
   <div id="reloj2"  style="background: #55005566;font-size: 1rem;color: #ffffff66;">00</div>
  </div>
 <!-- BLOQUE 1 -->
  <div style="background: #005500;">
    <div style="background: #000055;font-size: 1rem;color: #cccccc;width: 100%; height: 100px; overflow: auto;" >
     'start' => '1', 'limit' => '100': <br>
     <?php foreach($datos['data'] as $r) { 
       echo "(".$r['cmc_rank'].") " .$r['name']."&nbsp;&nbsp;".$r['symbol']."&nbsp;&nbsp;".","."&nbsp;&nbsp;";
     } 
     ?>
    </div>
  </div><br>
  Obtener nombre y simbolo de <?php if ($_POST) {echo "&nbsp;". $simboloMayuscula; }?>:
  <div style="display: flex;justify-content: start;align-items: center;background: #000033;">
   <p id='nombre' style="background: #0000ff;font-size: 2rem;padding: 0; margin: 0.5rem">
    <?php if ($_POST) { echo $name;} ?>
    </p>
   <p id='symbol' style="background: #0000ff;font-size: 2rem; opacity: 0.5;padding: 0; margin: 0.5rem">
    <?php if ($_POST) {echo "&nbsp;". $simboloMayuscula;} ?>
    </p>
   <p id='precio' class="precio" >
    </p>
      <svg id="svgUP1"   style="display: none;fill: rgba(0,255,0,0.95); width: 1.5rem;height: 1.5rem; " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 3 24 20"><path d="M15,20H9V12H4.16L12,4.16L19.84,12H15V20Z" /></svg>
      <svg id="svgDOWN1" style="display: none;fill: rgba(255,0,0,0.95); width: 1.5rem;height: 1.5rem; " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 1 24 20"><path d="M9,4H15V12H19.84L12,19.84L4.16,12H9V4Z" /></svg>
  </div>

  <form action="iframeindex.php" method="post">
   Escribir simbolo:  
   <input type="text" id="simbolo" name="simbolo" style="background: #00aaaa;border: solid 1px #7e7e7e;padding: 0.5rem;" value=<?php if ($_POST) {print_r($symbol);} ?> > 
   <input type="submit" id="enviar" value="Enviar"  onclick=""  style="background: #00aaaa; border: solid 1px #7e7e7e;border-radius: 6px;padding: 0.5rem;">
  </form><br>
 <!-- FIN DE:  BLOQUE 1  -->

 <!-- BLOQUE 2 -->
 <div style="background: #000000;">
 <div id="quote0" style="background: #880000;font-size: 0.75rem;">
 quote0 ⇨⇨⇨⇨<br>
   <?php print_r($quote0) ?> <?php echo '<br>' ?> 
 </div>
 <div id="name0" style="background: #440000;">
   <?php print_r($name0) ?> <?php echo '<br>' ?> 
 </div>
 <div id="symbol0" style="background: #660000;">
   <?php print_r($symbol0) ?> <?php echo '<br>' ?> 
 </div>
 
 <div id="price0" style="background: #aa0000;">id="price"</div>
 <br>
  Obtener datos de <?php if ($_POST) { echo "&nbsp;". $simboloMayuscula;} ?>:
  <div id="quote" style="color: #ff00ff;font-size: 0.75rem;">
  quote ⇨⇨⇨⇨<br>
   <?php if ($_POST) {print_r($quote);} ?> <?php echo '<br>' ?> 
 </div>
  <div id="symbol" style="color: #ff00ff;">
   <?php if ($_POST) {print_r($symbol);} ?> <?php echo '<br>' ?> 
 </div>
 <div id="price" style="color: #ff00ff;font-size: 1.5rem;"></div>
  Coinmarketcap(cambio cada 60s, actualizar pagina):
 <div id="texto" style="color: #00ff00;background: rgb(12, 0, 24);   ;display: flex;justify-content: start;align-items: center;text-align: left;">
    div id="texto"
 </div><br>
 </div>
 <!-- FIN DE:  BLOQUE 2  -->
 
 <!-- <script src="index.js"></script> -->

 <script>
    let TIMER=0, CONTADOR=0, price='', d1=13, precio1, old_price1=0 ,  r="rgba(255,0,0,0.95)", v='rgba(0,255,0,0.95)';
    function F1(m,n) { // ← FORMATEA CON n DECIMALES 
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

    function FD(N1) {// ← CONSTRUYE FORMATO PARA precio 
      // VET 0, GALA 0 , FLOKI 000 , PEPE 0000 , BTT 00000    
      let E1=((N1.split('.'))[0]).replace(/[,]/g, '')
      ,D1=(N1.split('.'))[1]
      ,a=Math.random()
      ,ceros=''; 
      for (let i = 0; i < D1.length; i++) {// ← CUENTA CEROS DESPUES DEL PUNTO 
        if (D1.charAt(i)!="0") break; ceros += D1[i];
      }console.log('D1 ceros  ceros.length ..............',ceros, ceros.length);

      let D2=D1.substring(0 , ceros.length+2); console.log('D2-----------',D2);
     
      if (E1.length > 3) {// ← SI PARTE ENTERA ES MAYOR A TRES CIFRAS RETORNA: 3,210.55  3,210,567.55 ...
        n1=E1+'.'+(String(a).split('.'))[1];
        return F1(n1,2);
      } 
      else {// ← FORMATO PARA PARTE ENTERA IGUAL O MENOR QUE 3: 888.3467321444   123.0467321444   12.000366543333   0.000002567856  RETORNA: 888.55  123.04655  12.0003655  0.000002555  ...
        let n2=E1+'.'+D2 + String((a.toFixed(1)).split('.')[1]);
        return n2;
      }
    } 

    function datos() { // ← FUNCION PARA SEPARAR 'precio' de 'quote': 
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
     let t0=quote.textContent.replace(/[[]/g,'@[');
       let t=t0.split('@').slice(2,14);
      price                = t[0].replace('[price] => ','');
      let volume_24h              = t[1].replace('[volume_24h] => ','')
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
      ;/// console.log());
      document.getElementById('precio').innerHTML=FD(Number(price).toFixed(d1));// ← NEUTRALIZAR NOTACION CIENTIFICA ⇨ price : 2.0941326917002E-5 A 0.0000208864459  
      document.getElementById('price').innerHTML= Number(price).toFixed(d1);
      
      svgDOWN1.style.display='inline';
      document.getElementById('precio').style.color=r;
    }
    datos();

    function quote0() {// ← IMPRIME nombre , simbolo y precio AL ABRIR PAGINA 
      let t0=document.getElementById('quote0').textContent.replace(/[[]/g,'@[');
      let t=t0.split('@').slice(2,14);
      let price0 = t[0].replace('[price] => ','');

      document.getElementById('nombre').innerHTML=document.getElementById('name0').textContent;
      document.getElementById('simbolo').value='             '+document.getElementById('symbol0').textContent;
      document.getElementById('precio').innerHTML=FD(price0);

      document.getElementById('symbol').innerHTML=document.getElementById('symbol0').textContent;
      document.getElementById('price0').innerHTML=price0;
      document.getElementById('price').innerHTML=price0;
      
      svgDOWN1.style.display='inline';
      document.getElementById('precio').style.color=r;
    } 

    function reloj() {
      CONTADOR=CONTADOR+1;
      Date.prototype.addMillisecs = function(d) { this.setTime(this.getTime() + (d)); return this; }
      var mydate0=new Date(), ss = new String(mydate0.getSeconds()); 
      document.getElementById("reloj").innerText=' CONTADOR: '+CONTADOR;
      document.getElementById("reloj2").innerText=ss;
      document.getElementById('precio').innerHTML=FD(document.getElementById('price').textContent); 

      precio1= Number(document.getElementById('precio').textContent.replace(/[,]/g, ''));
          if(precio1 > old_price1){document.getElementById('precio').style.color=v;svgDOWN1.style.display='none'; svgUP1.style.display='inline';} 
          else{document.getElementById('precio').style.color=r;svgDOWN1.style.display='inline'; svgUP1.style.display='none';}
          old_price1=precio1;
    }

    function enviar() {document.getElementById("enviar").click();} 

    var timerID, timerID2; 
    function startTimer() {timerID=window.setInterval(enviar,60000);}
    function stopTimer() {clearInterval(timerID);} 
    function startTimer2() {timerID2=window.setInterval(reloj,2000);}
    function stopTimer2() {clearInterval(timerID2);} 

    function timer(){
      (TIMER==0)? (stopTimer(),stopTimer2(),TIMER=1,document.getElementById('timer').value='Start timer'):(startTimer(),startTimer2(),TIMER=0,document.getElementById('timer').value='Stop timer');
    }
    
    function onload() {
      if (document.getElementById('simbolo').value=='') {quote0();} 
      startTimer();// ← TIMER PARA ANIMACION DE 2 ULTIMOS DECIMALES
      startTimer2();// ← TIMER PARA ENVIO DE FORMULARIO 
    }
  </script>
</body>
</html>



