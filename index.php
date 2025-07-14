<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style(para centrar tabbla).css"> -->
    <title>Mmaquetado-Grid</title>

    	<script src="jquery-3.4.1.min.js"></script>

    <style type="text/css">
       /* REFERENCIAS: */
      /* https://www.youtube.com/watch?v=xNZNHdplmxk&list=PLHW-COpapaVvMABXh_x9R20j57Dex19xI&index=1 */
      /* https://www.youtube.com/watch?v=Sgf4HEAW-gQ */

          @import url('https://fonts.googleapis.com/css2?family=Saira:ital,wght@0,100..900;1,100..900&display=swap');
       /*  
       @font-face {font-family: "Saira Expanded";src: url("Saira_Expanded-Bold.ttf");}
       @font-face {font-family: "Saira Expanded SemiBold";src: url("Saira_Expanded-SemiBold.ttf");}
      */  
    :root{   
        --html-color: hsla(240, 100%, 6%, 1.0);
        --bg-color:rgb(18, 18, 18);           /* PARA INICIAR EN MODO CLARO CAMBIAR A: hsl(0, 0%, 14%) */
        --bg-card-color: rgb(40, 40, 40);      /* PARA INICIAR EN MODO CLARO CAMBIAR A: hsl(0, 0%, 11%) */
        --pr1mary-color: rgb(192, 192, 192);/* PARA INICIAR EN MODO CLARO CAMBIAR A: hsl(228, 100%, 30%) */
        --text-color:rgba(205, 219, 220, 0.98);    /* PARA INICIAR EN MODO CLARO CAMBIAR A: hsl(214, 7%, 79%) */
        --border-color: rgba(169, 169, 169,, 0.9);
        --border-tr-color: rgba(193, 193, 193, 0.5);
        --border-radius_tex: 0.25rem;  /* PARA ARCO INTERNO */
        --border-radius: 0.25rem;  /* PARA ARCO EXTERNO (ARCO INTERNO + PADDING)*/
        --transition: color 0.1s, background-color 0.6s ease-in-out;
        --font-family1: 'Saira', 'Saira Expanded SemiBold', sans-serif;/*font-family: "Roboto", sans-serif;*/ /*font-family: Impact, sans-serif;'Times New Roman'; 'Consolas'; 'Oswald'*/
        --font-family2: 'Saira', 'Saira Expanded SemiBold', sans-serif; /*PARA NUMEROS*/ 
        --font-size1: 0.5rem;/*TAMAÑO TEXTO NORMAL --font-size1: 0.80rem;*/ 
        --font-size2: 1.35rem; /*TAMAÑO PARA SUB TITULOS --font-size2: 0.86rem;*/ 
        --font-size3: 1rem; /*TAMAÑO PARA TITULOS --font-size3: 1.25rem; */
        --font-size4: 0.70rem; /*TAMAÑO PARA TELEF CON WIDTH 320PX --font-size4: 0.8rem; */
        --font-size5: 1.75rem;/* PARA @media screen and  (max-width: 320px) */
        --font-size6: 0.85rem;/* PARA NOMBRE DE CRIPTOMONEDA EN CARDs */
    
        --font-weight1: 700;  /*GROSOR PARA TEXTO TITULOS*/ 
        --font-weight2: 600;  /*GROSOR TEXTO NORMAL*/
        --box-shadow1: 0 0 2px var(--border-color); /* --box-shadow1: none . Elimina (o simplemente no establece) sombra en un elemento.*/
        --box-shadow2: 0 0 4px var(--border-color); /* --box-shadow1: none . Elimina (o simplemente no establece) sombra en un elemento.*/
     
        --paddingC1: 0.250rem 0;  /* padding para celdas de cTable1: #celda_c1... */
        --paddingC2: 0.55rem 1rem;/* padding para .btnArrowUp... */
        /* VALORES PARA CONTROL DE LISTA DE OPCIONES: */
        --height_LO1: 1.8rem;--height_LO2: 1.5rem;--height_LO3: 1.5rem;
        --width_LO1: 12rem;--width_LO2: 10rem;--width_LO3: 6.5rem;
        --n: 0rem;
        /*FIN DE: VALORES PARA CONTROL DE LISTA DE OPCIONES */
        --widhtSvg: 0.5rem; --heightSvg: 0.5rem; /* VALORES PARA LOS svg DE TABLAS*/
        --button-color: rgb(1, 61, 225);/* --button-color: rgb(1, 61, 225); */
        --n2:20px; --n3:20px;    
    }

      
      *{
          box-sizing: border-box;
          margin: 0;
          padding: 0;
      }
      html{
          font-size: 30px; /* Fuente raiz, si cambiar a otros valor entonces cambiaran el resto. Fuente predeterminada del explorador 16px  */  /* https://www.youtube.com/watch?v=Sgf4HEAW-gQ */
      }
      body{
          background-color: rgb(0, 2, 110);
color: var(--text-color); font-weight: var(--font-weight1);font-family: var(--font-family1);
           /*font-size: 30%; 50% de: html{font-size: 16px;} */
           font-size: var(--font-size1);
          text-transform: uppercase;
          min-height: 100vh;
          padding: 10px;
      } 
      .grid_container > * {
          border-radius: 10px;
          padding: 10px;
          text-align: center;
      
      }
      .grid_container{
          display: grid;
          gap : 10px;
          grid-template:
          "header" auto
          "navbar" 20px
          "main" auto
          "sidebar" 20px
          "footer" 40px;
      }
      
      .header{
          grid-area: header;
          background-color: rgba(0, 0, 0, 1);
          /*display: none;*/
      }
      .navbar{
          grid-area: navbar;
          background-color: rgba(20, 0, 15, 0.99);
      }
      .sidebar{
          grid-area: sidebar;
          background-color: rgba(0, 16, 4, 1);
      }
      .main{
          grid-area: main;
          background-color: rgba(25, 25, 25, 0.57);
      
      overflow: auto;
      }
      .footer{
          grid-area: footer;
          background-color: rgba(29, 14, 0, 1);
      }
      
      
      
      
      @media (min-width: 768px) {
          .grid_container{
              grid-template:   
             "header  navbar" auto
             "sidebar main"   auto
             "footer  footer"  40px /
              20px   auto ;
          }

      }
      @media (min-width: 992px) {
          .grid_container{ 
             grid-template:
             "header  header header" auto
             "navbar  main  sidebar" auto
             "footer  footer footer"  60px /
              20px   auto   20px;
          }
  
      }
      .DIV{
          background: rgba(52, 0, 125, 1);
             padding: 5px;
             width: 100%;
      }
       .div1{
          background: rgba(0, 6, 180, 1);
                  padding: 5px;
           width: 100%;
           overflow: auto;
       }
       .tabla1 {
              background: rgba(0, 0, 7, 1);
            border:  2px solid var(--border-color);;
           /*border: 2px solid rgb(4, 150, 1);*/
           width: 100%;
          border-collapse: collapse;
       }
        .tabla1 td{
                 border-top:  2px solid var(--border-color);;border-bottom:  2px solid var(--border-color);;
          border-left: none;border-right: none;
       }

   .tabla1 .d0{
      background: rgba(0, 9, 80, 1);
      display: flex;justify-content:space-between;align-items: center;       /*width: 100%;height: 100%;*/
      padding: 10px;;
      white-space: nowrap;
      /*text-align: left;*/
    }
    
  .tabla1 .d1{
      background: rgba(0, 9, 80, 1);
      display: flex;justify-content:space-between;align-items: center;       /*width: 100%;height: 100%;*/
      padding: 10px;;
      white-space: nowrap;
      /*text-align: left;*/
    }
   

    .tabla1 .d_s{
      background: rgba(0, 1, 9, 1);
            display: flex;justify-content: start;align-items: center;  
      padding: 10px;;
            white-space: nowrap;

    }
        .tabla1 .d_cf{
      background: rgba(0, 0, 12, 1);
      display: flex;justify-content:space-between;align-items: center;
      padding: 10px;;
      white-space: nowrap;
    }

    .pp{text-align: right;;white-space: nowrap;color: var(--text-color); background: rgba(39, 39, 39, 1);;} /*OJO  margin: 0.25rem  0.25rem 0.25rem  1rem  */

    .tabla1 .d_cf3{
      background: rgba(0, 0, 12, 1);
      color: #875400ff;
      display: flex;justify-content:space-between;align-items: center;
      padding: 10px;;
      white-space: nowrap;

    }
    .tabla1 .divx{
      background: rgba(0, 0, 7, 0);
      display: flex;justify-content:space-between;align-items: center;
      padding: 10px;;
      white-space: nowrap;

    }
       .tabla1 .divx1{
      background: rgba(0, 0, 7, 1);
      display: flex;justify-content:space-between;align-items: center;
      padding: 10px;;
      white-space: nowrap;

    }
    </style>
</head>
<body class="grid_container"   onload="onload()">
    <header class="header">header
        <div style="width: auto;">
            <div style="display: flex;justify-content: start;align-items: center;    color: var(--text-color);font-family: var(--font-family2); font-weight: var(--font-weight2);">
            <div id="reloj"></div>
            <?php echo 'Reloj1: &nbsp;' ?>
            <div id="reloj1">00</div><?php echo '&nbsp;&nbsp; Reloj2: &nbsp;' ?><div id="reloj2">00</div>
            </div>
            <input type="button" id='SALUDAME' value="SALUDAME" onclick="datos() , texto();">
            <input type="button" id='gt' value="agregar" onclick="generatabla();">
          
            <input type="text" id="texto" value="0.0">Timer: 60,000 ms 
            <input type="text" name="usuario" id="usuario" value="BTC">
            <div id="quote0" style="background:rgb(10, 46, 0);width: 80%; overflow:auto;"></div><br>
          
            <div id="quote1" style="background:rgb(26, 0, 46);"></div>
            <div id="quote2" style="background:rgb(26, 0, 46);"></div>
            <div id="quote3" style="background:rgb(50, 2, 87);"></div>
            <div id="quote4" style="background:rgb(50, 2, 87);"></div>
            <div id="quote5" style="background:rgb(50, 2, 87);"></div><br>

            <div ><span id='price0' class="precio" ></span></div>
            <div ><span id='price' class="precio" ></span></div>
            
            <div >
              <div ><span id='precio01' class="precio" ></span></div>
              <div ><span id='precio02' class="precio" ></span></div>
              <div ><span id='precio03' class="precio" ></span></div>
              <div ><span id='precio04' class="precio" ></span></div>
              <div ><span id='precio05' class="precio" ></span></div><br>
          
              <div ><span id='total' class="precio" ></span></div>
          
              <div style="display: flex;justify-content: center;align-items: center;" ><svg id="svgUP1"   style="display: none;fill: rgba(0,255,0,0.95); width: 1.5rem;height: 1.5rem; " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 3 24 20"><path d="M15,20H9V12H4.16L12,4.16L19.84,12H15V20Z" /></svg></div>
              <div style="display: flex;justify-content: center;align-items: center;" ><svg id="svgDOWN1" style="display: none;fill: rgba(255,0,0,0.95); width: 1.5rem;height: 1.5rem; " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 1 24 20"><path d="M9,4H15V12H19.84L12,19.84L4.16,12H9V4Z" /></svg></div>
              <div style="display: flex;justify-content: center;align-items: center;"><span class='usd'></span></div>
            </div>
        </div>
    </header>
    <nav class="navbar"></nav>
    <aside class="sidebar"></aside>
    <article class="main">
        <div class="DIV">
            <div class="div1">
            <table class="tabla1" id="tabla_1"> 
              <tr>
                <td><div class='d0'><p>SIMBOLO</p><p></p></div></td><td><div class='d1'><p></p><p>CANTIDAD</div></td><td><div class='d1'><p></p><p>CAPITAL INICIAL</div></td><td><div class='d1'><p></p><p>PRECIO DE COMPRA</div></td><td><div class='d1'><p></p><p>PRECIO ACTUAL</p></div></td><td><div class='d1'><p></p><p>DIFERENCIA</p></div></td><td><div class='d1'><p></p><p>GANANCIAS/PERDIDAS</p></div></td><td><div class='d1'><p></p><p>CAPITAL FINAL</p></div></td>
              </tr>
              <tbody id='tbodyD'></tbody>
                <tfoot id='tfootD'>
                   <tr> <td><div class='divx'></div></td><td><div class='divx'></div></td><td><div class='divx1'><p></p><p class="pp"  id='capitalIniciaTotal'>0</p></div></td><td><div class='divx'></div></td><td><div class='divx'></div></td><td><div class='divx'></div></td><td><div class='divx1'><p></p><p class="pp" id='diferenciaTotal'>0</p></div></td><td><div class='divx1'><p></p><p class="pp" id='capitalFinalTotal'>0</p></div></td> </tr> 
                </tfoot>
            </table>
            </div>
        </div>
    </article>
    <footer class="footer">footer</footer>           

    <script>
	function saludame(){// "122523.34802947@2.9760536969663@0.4759308538933@1.369319172081@1.0816661870274" //////////////////////////////////////////////
                      //  "122528.24146987@2.9752721537366@0.47609867379437@1.369711692016@1.0816661870274"
     let texto='wwwwwwwwwww';
    var parametros = 
    {
      "nombre" : texto,
      "apellido" : "hurtado",
      "telefono" : "123456789"
    };
    $.ajax({
      data: parametros,
      url: 'codigo_php01.php', 
      type: 'POST',
      
      beforesend: function()
      {
        $('#quote0').html("Mensaje antes de Enviar");
      },
      success: function(mensaje)
      {
        $('#quote0').html(mensaje);
      }
    });

  } 

  let TIMER=0, CONTADOR=0, price='', d1=13, precio1, old_price1=0 ,  r="rgba(255,0,0,0.95)", v='rgba(0,255,0,0.95)', b='#f4feffff', fiat='USD';
  let n3=8; 
  let array=['BTC','BTC','XRP','XRP','XLM','FARTCOIN','WLD','NEARUSDT','ICPUSDT','FETUSDT','RENDERUSDT','GRTUSDT','TIAUSDT','MANTAUSDT','PYTHUSDT','PEPEUSDT'];
  
  function F(m,n) { //FORMATEA CON n DECIMALES
    let cadena= new String(Number(m).toFixed(n3))/* toFixed(n3) CONVIERTE -4.7e-7 A -0.00000047 Y SE EVITA RESPUESTAS CON NOTACION CIENTIFICA; SI SE DESEA NOTACION CIENTIFICA USAR: let cadena= new String(m) */
    , rgx = /(\d+)(\d{3})/, ceros='',nuevaCadena='', decimal, d, nuevaParteEntera='', e; 
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

  function generatabla() {
    let e=1, C=2, d=4, simbolo='s', cantidad=0, capitalI=0, pCompra=0, pVenta=0, diferencia=0, gp=0, capitalF=0;
    
    for (let i = 1; i < 15; i++) {// ⭠ IMPRIME 

    let TR= `<tr       id='tr_`  +i+`'`+` name='TR' class='TR'>`+ 
    `<td class='td_cf' id='td_sp`+i+`'><div class='d_s' name='SYMBOL`+i+`' id='p_s`+i+`'>`+simbolo+`</div></td>`+ 
    `<td class='td_cf' id='td_ci`+i+`'><div class='d_cf' ><p></p><p class="pp"  name='cantidad`+''+`'   id='p_c` +i+`'>`+F(cantidad   ,d)+`</p></div></td>`+                   /*               */ 
    `<td class='td_cf' id='td_pc`+i+`'><div class='d_cf' ><p></p><p class="pp"  name='cinicial`+''+`'   id='p_ci`+i+`'>`+F(capitalI   ,d)+`</p></div></td>`+                   /*name='L`+e+`'  */      
    `<td class='td_cf' id='td_pv`+i+`'><div class='d_cf' ><p></p><p class="pp"  name='compra`+''+`'     id='p_pc`+i+`'>`+F(pCompra    ,d)+`</p></div></td>`+                   /*name='L`+e+`1' */      
    `<td class='td_cf' id='td_dp`+i+`'><div class='d_cf3'><p></p><p class="pp"  name='venta`+''+`'      id='p_pv`+i+`'>`+F(pVenta     ,d)+`</p></div></td>`+                   /*name='L`+e+`2' */      
    `<td class='td_cf' id='td_c` +i+`'><div class='d_cf' ><p></p><p class="pp"  name='diferencia`+''+`' id='p_dp`+i+`'>`+F(diferencia ,d)+`</p></div></td>`+                   /*name='L`+e+`'  */      
    `<td class='td_cf' id='td_p` +i+`'><div class='d_cf' ><p></p><p class="pp"  name='profit`+''+`'     id='p_p` +i+`'>`+F(gp         ,d)+`</p></div></td>`+ /*name='L`+e+`3' */
    `<td class='td_cf' id='td_cf`+i+`'><div class='d_cf' ><p></p><p class="pp"  name='cfinal`+''+`'     id='p_cf`+i+`'>`+F(capitalF   ,d)+`</p></div></td>`+                   /*name='L`+e+`4' */ 
    `</tr>`; 
    /* 
    let TR2=
    `<tr> <td><div class='divx'></div></td><td><div class='divx'></div></td><td><div class='divx1' id='capitalIniciaTotal'><p></p><p class="pp">00000</p></div></td><td><div class='divx'></div></td><td><div class='divx'></div></td><td><div class='divx'></div></td><td><div class='divx1' id='diferenciaTotal'><p></p><p class="pp">0</p></div></td><td><div class='divx1' id='capitalFinalTotal'><p></p><p class="pp">0</p></div></td> </tr>`
    let TR= `<tr       id='tr_`  +i+`'`+` name='TR' class='TR'>`+ 
    `<td class='td_cf' id='td_sp`+i+`'><div class='d_s' name='SYMBOL`+i+`' id='p_s`+i+`'>`+simbolo+`</div></td>`+
    `<td class='td_cf' id='td_ci`+i+`'><div class='d_cf' name='cantidad`+''+`'   id='p_c` +i+`'>`+F(cantidad   ,d)+`</div></td>`+                  
    `<td class='td_cf' id='td_pc`+i+`'><div class='d_cf' name='cinicial`+''+`'   id='p_ci`+i+`'>`+F(capitalI   ,d)+`</div></td>`+                       
    `<td class='td_cf' id='td_pc`+i+`'><div class='d_cf' name='compra`+''+`'     id='p_pc`+i+`'>`+F(pCompra    ,d)+`</div></td>`+                       
    `<td class='td_cf' id='td_pv`+i+`'><div class='d_cf3' name='venta`+''+`'     id='p_pv`+i+`'>`+F(pVenta     ,d)+`</div></td>`+                       
    `<td class='td_cf' id='td_dp`+i+`'><div class='d_cf' name='diferencia`+''+`' id='p_dp`+i+`'>`+F(diferencia ,d)+`</div></td>`+                       
    `<td class='td_cf' id='td_c` +i+`'><div class='d_cf' name='profit`+''+`'     id='p_p` +i+`'>`+F(gp         ,d)+`</div></td>`+                       
    `<td class='td_cf' id='td_cf`+i+`'><div class='d_cf' name='cfinal`+''+`'     id='p_cf`+i+`'>`+F(capitalF   ,d)+`</div></td>`+                
    `</tr>`; */
    tbodyD.innerHTML += TR;
    // tfootD.innerHTML = TR2; 
    document.getElementById('p_s'+i).innerText=array[i-1];
    }
    
  }

        var n=0, cuentainicial=0, cuentafinal=0, sumaTotal_ci=0, sumaTotal_cf=0, array_ci=[], array_cf=[];

  function datos() { // ← FUNCION PARA SEPARAR 'precio' de 'quote': 
      //document.getElementById('quote0').textContent= "117500.00@2.7373@0.39445@1.27658@1.0215";
    saludame();
    
    let quote0= document.getElementById('quote0').textContent;
    document.getElementById('quote1').textContent=quote0.replace(/"/g,'').split('@')[0];
    document.getElementById('quote2').textContent=quote0.replace(/"/g,'').split('@')[1];
    document.getElementById('quote3').textContent=quote0.replace(/"/g,'').split('@')[2];
    document.getElementById('quote4').textContent=quote0.replace(/"/g,'').split('@')[3];
    document.getElementById('quote5').textContent=quote0.replace(/"/g,'').split('@')[4];

    let p1=quote0.replace(/"/g,'').split('@')[0];
    let p2=quote0.replace(/"/g,'').split('@')[1];
    let p3=quote0.replace(/"/g,'').split('@')[2];
    let p4=quote0.replace(/"/g,'').split('@')[3];
    let p5=quote0.replace(/"/g,'').split('@')[4];

    let price1 = document.getElementById('quote1').textContent;
    let price2 = document.getElementById('quote2').textContent;
    let price3 = document.getElementById('quote3').textContent;
    let price4 = document.getElementById('quote4').textContent;
    let price5 = document.getElementById('quote5').textContent;

    let r1=Number(p1)*0.02677632;
    let r2=Number(p2)*18.30269;
    let r3=Number(p3)*83.00;
    let r4=Number(p4)*97.91192;
    let r5=Number(p5)*98.901;

    precio01.innerText='0.02677632 BTC'   +' x '+ F(Number(price1) , 4) + ' = '+ F(r1 , 4) + ' USDT';  
    precio02.innerText='18.30269 XRP'     +' x '+ F(Number(price2) , 4) + ' = '+ F(r2 , 4) + ' USDT';  
    precio03.innerText='83.00 XLM'        +' x '+ F(Number(price3) , 4) + ' = '+ F(r3 , 4) + ' USDT';  
    precio04.innerText='97.91192 FARTCOIN'+' x '+ F(Number(price4) , 4) + ' = '+ F(r4 , 4) + ' USDT'; 
    precio04.innerText='98.901 WLD'       +' x '+ F(Number(price4) , 4) + ' = '+ F(r4 , 4) + ' USDT'; 

    let t=r1+r2+r3+r4;
    //let array=     ['BTC'      ,'BTC'       ,'XRP'    ,'XRP'    ,'XLM'       ,'FARTCOIN','WLD'   ,'NEARUSDT','ICPUSDT','FETUSDT','RENDERUSDT','GRTUSDT','TIAUSDT','MANTAUSDT','PYTHUSDT','PEPEUSDT'];
    let cantidadM=    ['0.0178'   ,'0.00897632','11.00'  ,'7.30269','83.00'     ,'97.91192','98.901','8','9','10','11','12','13','14','15','16','17'];
    let preciocompra=['64,522.00','58,000.00' ,'1.97478','0.525'  ,'0.241084'  ,'1.3090'  ,'1.291' ,'8','9','10','11','12','13','14','15','16','17'];
    let precioactual=[price1     ,price1      ,price2   ,price2   ,price3      ,price4    ,price5  ,0,0,0,0,0,0,0,0,0,0];// 'price6,price7,price8,price9,price10,price11,price12,price13,price14,price15,price16,price17'

    document.getElementById('total').textContent='TOTAL = ' + F(t , 4) + ' USDT'; 
    let d=0, ni=0, nf=0;
    for (let i = 1; i < cantidadM.length+1; i++) {

      let cantidad= Number(cantidadM[i-1].replace(/,/g,'')),
      cuentaI= Number(cantidadM[i-1].replace(/,/g,'')) * Number(preciocompra[i-1].replace(/,/g,'')),
      compra= preciocompra[i-1].replace(/,/g,''), 
      diferencia=  Number(precioactual[i-1].replace(/,/g,'')) - Number(preciocompra[i-1].replace(/,/g,'')) ,
      comision= 0.10,
      ganancia= (diferencia - (((Number(compra)/100)*Number(comision)) +(((Number(compra) + diferencia)/100)*Number(comision))))*(Number(cuentaI)/Number(compra)) ;
      document.getElementById('p_c' +i).innerText=F(cantidad                 ,4);
      document.getElementById('p_ci'+i).innerText=F(cuentaI                  ,4);
      document.getElementById('p_pc'+i).innerText=F(compra                   ,4);
      document.getElementById('p_pv'+i).innerText=F(precioactual[i-1]        ,4);
      document.getElementById('p_dp'+i).innerText=F(diferencia               ,4);
      document.getElementById('p_p' +i).innerText=F(ganancia                 ,4) + '' + ' ('+F((((Number(cuentaI)+ganancia)-cuentaI)*100)/cuentaI, 4 )+'%)';
      document.getElementById('p_cf'+i).innerText=F(Number(cuentaI)+ganancia ,4); 

      document.getElementById('p_pv'+i).style.color='#875400ff';
      
      if(ganancia > 0)  {document.getElementById('p_p'+i).style.color=v; document.getElementById('p_cf'+i).style.color=v;}   
      if(ganancia < 0)  {document.getElementById('p_p'+i).style.color=r; document.getElementById('p_cf'+i).style.color=r;  }
      if(ganancia == 0) {document.getElementById('p_p'+i).style.color=b; document.getElementById('p_cf'+i).style.color=b;}   
     // console.log("################## : ",compra,comision,cuentaI,ganancia,Number(cuentaI)+ganancia); 

      // n+=Number(document.getElementById('p_cf'+i).textContent.replace(/,/g,''));  document.getElementById('capitalFinalTotal').innerText= n;
      let ni1= Number(document.getElementById('p_ci1').textContent.replace(/,/g,'')),
          ni2= Number(document.getElementById('p_ci2').textContent.replace(/,/g,'')),
          ni3= Number(document.getElementById('p_ci3').textContent.replace(/,/g,'')),
          ni4= Number(document.getElementById('p_ci4').textContent.replace(/,/g,'')),
          ni5= Number(document.getElementById('p_ci5').textContent.replace(/,/g,'')),
          ni6= Number(document.getElementById('p_ci6').textContent.replace(/,/g,'')),
          ni7= Number(document.getElementById('p_ci7').textContent.replace(/,/g,''));
      ni= F((ni1+ni2+ni3+ni4+ni5+ni6+ni7),4);  document.getElementById('capitalIniciaTotal').innerText= ni;
       
      let nf1= Number(document.getElementById('p_cf1').textContent.replace(/,/g,'')),
          nf2= Number(document.getElementById('p_cf2').textContent.replace(/,/g,'')),
          nf3= Number(document.getElementById('p_cf3').textContent.replace(/,/g,'')),
          nf4= Number(document.getElementById('p_cf4').textContent.replace(/,/g,'')),
          nf5= Number(document.getElementById('p_cf5').textContent.replace(/,/g,'')),
          nf6= Number(document.getElementById('p_cf6').textContent.replace(/,/g,'')),
          nf7= Number(document.getElementById('p_cf7').textContent.replace(/,/g,''));
       nf= F((nf1+nf2+nf3+nf4+nf5+nf6+nf7),4); document.getElementById('capitalFinalTotal').innerText= nf;
        
       d=(nf1+nf2+nf3+nf4+nf5+nf6+nf7) - (ni1+ni2+ni3+ni4+ni5+ni6+ni7);
       dt=F((d) , 4)+ ' USDT' + ' ('+F(((d)*100)/(ni1+ni2+ni3+ni4+ni5+ni6+ni7), 4 )+'%)'; document.getElementById('diferenciaTotal').innerText= dt;


      if(d > 0)  {document.getElementById('diferenciaTotal').style.color=v;document.getElementById('capitalFinalTotal').style.color=v;}   
      if(d < 0)  {document.getElementById('diferenciaTotal').style.color=r;document.getElementById('capitalFinalTotal').style.color=r;  } 
      if(d == 0) {document.getElementById('diferenciaTotal').style.color=b;document.getElementById('capitalFinalTotal').style.color=b;}
    }
    /* 
    document.getElementById('capitalIniciaTotal').innerText= ni;
    document.getElementById('capitalFinalTotal').innerText= nf;
    document.getElementById('diferenciaTotal').innerText= dt;

    if(d > 0)  {document.getElementById('diferenciaTotal').style.color=v;document.getElementById('capitalFinalTotal').style.color=v;}   
      if(d < 0)  {document.getElementById('diferenciaTotal').style.color=r;document.getElementById('capitalFinalTotal').style.color=r;  } 
      if(d == 0) {document.getElementById('diferenciaTotal').style.color=b;document.getElementById('capitalFinalTotal').style.color=b;}
     */
    ////////
    document.getElementById('SALUDAME').click();   
    ////////
   /*
    1,970.5322     1,491.8073 USDT (75.7058%)    3,462.3395   
                  1,491.7180 USDT (75.7012%)     3,462.2502   

    */

  }

     let nn=1;  
    function texto() { // 
    ////////
    document.getElementById('texto').value= nn++;
    if (document.getElementById('texto').value== 12) {
      nn= 1;
    }
    ////////
    
  }

  function quote0() {////SIN USO ← IMPRIME nombre , simbolo y precio AL ABRIR PAGINA 
      let t0=document.getElementById('quote0').textContent.replace(/[[]/g,'@[');
      let t=t0.split('@').slice(2,14);
      let price0 = t[0].replace('[price] => ','');

      //document.getElementById('nombre').innerHTML=document.getElementById('name0').textContent;
      //document.getElementById('simbolo').value='             '+document.getElementById('symbol0').textContent;
      document.getElementById('precio').innerHTML=FD(price0);

      //document.getElementById('symbol').innerHTML=document.getElementById('symbol0').textContent;
      document.getElementById('price0').innerHTML=price0;
      document.getElementById('price').innerHTML=price0;
      
      svgDOWN1.style.display='inline';
      document.getElementById('precio').style.color=r;
      //simboloC.innerHTML = document.getElementById('symbol0').textContent;
      //document.getElementById("enviar").click();
  }   
  
  function onload() {
    saludame();
    generatabla();
    startTimer(); startTimer1();startTimer2();
  }

  function reloj() {//SIN USO
      CONTADOR=CONTADOR+1;
      Date.prototype.addMillisecs = function(d) { this.setTime(this.getTime() + (d)); return this; }
      var mydate0=new Date(), ss = new String(mydate0.getSeconds()); 
      document.getElementById("reloj").innerText=' CONTADOR: '+CONTADOR;
      document.getElementById("reloj2").innerText=ss;

      precio1= Number(document.getElementById('precio').textContent.replace(/[,]/g, ''));
          if(precio1 > old_price1){document.getElementById('precio').style.color=v;svgDOWN1.style.display='none'; svgUP1.style.display='inline';} 
          else{document.getElementById('precio').style.color=r;svgDOWN1.style.display='inline'; svgUP1.style.display='none';}
          old_price1=precio1;
      (CONTADOR==30)? CONTADOR=0 : CONTADOR=CONTADOR;   
  }
  function reloj1() {
      var mydate0=new Date(), ss = new String(mydate0.getSeconds()); 
      document.getElementById("reloj1").innerText=ss;
  } 
  function reloj2() {
      var mydate0=new Date(), ss = new String(mydate0.getSeconds()); 
      document.getElementById("reloj2").innerText=ss;
      if (precio01.textContent=='') {
        datos();stopTimer2();
      }
  }

  var timerID, timerID1, timerID2; 
  function startTimer() {timerID=window.setInterval(datos,60000);} 
  function stopTimer() {clearInterval(timerID);} 
  function startTimer1() {timerID1=window.setInterval(reloj1,1000);}
  function stopTimer1() {clearInterval(timerID1);} 
  function startTimer2() {timerID2=window.setInterval(reloj2,2000);}
  function stopTimer2() {clearInterval(timerID2);}  

    </script>
</body>
</html> 
