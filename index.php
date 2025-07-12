<!--  https://www.youtube.com/watch?v=_0iZ3W2u_Bo&t=733s 
     https://dostinhurtado.com/site/cursos/curso-php/php-capitulo-11/ 
-->

<!DOCTYPE html>
<html>
<head>
	<title>Probando</title> 
	<script src="jquery-3.4.1.min.js"></script>
  <style type="text/css">
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
        --text-color:rgba(234, 234, 234, 0.75);    /* PARA INICIAR EN MODO CLARO CAMBIAR A: hsl(214, 7%, 79%) */
        --border-color: rgb(169, 169, 169);
        --border-tr-color: rgba(193, 193, 193, 0.5);
        --border-radius_tex: 0.25rem;  /* PARA ARCO INTERNO */
        --border-radius: 0.25rem;  /* PARA ARCO EXTERNO (ARCO INTERNO + PADDING)*/
        --transition: color 0.1s, background-color 0.6s ease-in-out;
        --font-family1: 'Saira', 'Saira Expanded SemiBold', sans-serif;/*font-family: "Roboto", sans-serif;*/ /*font-family: Impact, sans-serif;'Times New Roman'; 'Consolas'; 'Oswald'*/
        --font-family2: 'Saira', 'Saira Expanded SemiBold', sans-serif; /*PARA NUMEROS*/ 
        --font-size1: 0.9rem;/*TAMAÑO TEXTO NORMAL --font-size1: 0.80rem;*/ 
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
    
    html{background-color: var(--bg-color);}  /*  CORREGIR P' CUANDO TABLAS CREADAS SE DESBORDAN*/ 
    
    body{
        background-color: var(--bg-color);
        margin: 0 0.5rem;
        color: var(--text-color);/* "Roboto",'Poppins', 'Oswald', sans-serif; sans-serif, 'Times New Roman', 'Arial Narrow', fantasy, Impact */
        font-size: 1.2rem;font-weight: 700;
        overflow:auto;
    
    }
    body::-webkit-scrollbar{width: 10px;height: 10px;background: var(--bg-card-color);}
    body::-webkit-scrollbar-track{      background: rgb(124, 124, 124) ;border-radius: 5px;}
    body::-webkit-scrollbar-thumb{      background: rgb(   78, 78, 78);border-radius: 5px;}
    body::-webkit-scrollbar-thumb:hover{background: rgb(   55, 55, 55);}
    
    .main{position: relative;top: 2.0rem}
  
    .container{
      background:  var(--bg-color);
      display: flex;justify-content: center;flex-direction: column;
      padding: 0px;margin: 0;
    }
  
    .button{
      text-align: center;
      padding: 0.25rem 0.5rem;margin: 0.5rem;
      color: var(--text-color); font-size: var(--font-size4);font-family: var(--font-family2); font-weight: var(--font-weight1);
      background-color:  var(--button-color);
      border-radius: var(--border-radius); 
      transition: var(--transition); transition: 0.2s; 
    }
    .button:hover {
        background-color:rgb(29, 82, 225);
        cursor: pointer;
        transform: scaleX(1.125) scaleY(1.125) translateX(0px) translateY(0px); /*1 ANIMAR p */
    }
    .textarea{background: var(--bg-card-color);border: solid 1px rgb(169, 169, 169);font-size: 0.75rem;color: var(--text-color); padding:0.25rem}
    .textarea0{height: 4rem;overflow: auto;}
    .textarea0::-webkit-scrollbar{width: 10px;height: 10px;background: var(--bg-card-color);}
    .textarea0::-webkit-scrollbar-track{      background: rgb(124, 124, 124) ;border-radius: 5px;}
    .textarea0::-webkit-scrollbar-thumb{      background: rgb(   78, 78, 78);border-radius: 5px;}
    .textarea0::-webkit-scrollbar-thumb:hover{background: rgb(   55, 55, 55);}
  
    .criptomonedas{
      background: #00990000;display: flex;justify-content: start;align-items: center;flex-wrap: wrap;padding: 0;margin: 0;
      color: var(--text-color); font-size: var(--font-size5);font-family: var(--font-family2); font-weight: var(--font-weight2);
    }
    .criptomonedas span{margin-right: 1rem;}
    .criptomonedas svg{margin-left: -1rem;}
    .criptomonedas .usd{font-size: var(--font-size5);font-family: var(--font-family2); font-weight: var(--font-weight2);}
  
    #symbol{opacity: 0.5;} 
  
    .precio{background:rgb(82, 0, 10,0);
     font-family: var(--font-family1); 
     opacity: 1;padding: 0; margin: 0;
     color:rgb(255, 191, 0);
    }
  
    /* PARA LISTA DE OPCIONES */
    .div0{width: var(--width_LO1);height: var(--height_LO1); margin: 0px;background: #ff000000;}
    .contenedor3 {position: relative;width: 100%;height: 100%; ;}
    .select {
     background: var(--bg-card-color);
     position: relative; ;
     height: var(--height_LO1); top: -0.9rem;
     display: flex;justify-content: space-between;align-items: center;
     box-shadow: var(--box-shadow1) ;
     border-radius: var(--border-radius_tex);
     cursor: pointer;
     transition: .2s ease all;
     padding: 0 0.50rem;
    }
    .select.active, .select:hover {box-shadow: var(--box-shadow1) ;}
    .select svg {width: var(--widhtSvg);height: var(--heightSvg);}
    .select svg path{fill:  var(--text-color); stroke-width: 4px;stroke: var(--text-color);}
    .contenido-select3{padding: 0 0.0rem;width: 100% ;color:  var(--text-color);
     font-size: var(--font-size1);font-family: var(--font-family1);font-weight: var(--font-weight1);
    } 
    .contenido-select3:hover {cursor: pointer;}
    
    
    .opciones {/* id= opciones3*/
      background:var(--bg-card-color);
      position: relative; ;
      height: 0; width: calc(var(--width_LO1) + var(--n));left: calc((-1) * (var(--n) / 2)); top: -0.75rem;/* width: calc(var(--width_LO1)+(2*var(--n)));left: calc(-(var(--n)));  */
      /*max-height: 20rem;*/
      display: none;
      border-radius: var(--border-radius_tex);
      box-shadow: var(--box-shadow1) ;
    }
    .opciones.active {display: block;/*height: 20rem;*/padding: 0.25rem; animation: fadeIn .3s forwards;}
    
    .opciones0{
        display: block;
        position: relative;
        height: 13rem; 
        overflow: auto;
     /* scrollbar-width: thin;   ancho de la barra de desplazamiento */
    }
    .opciones0::-webkit-scrollbar{width: 10px;height: 10px;background: var(--bg-card-color);}
    .opciones0::-webkit-scrollbar-track{      background: rgb(124, 124, 124);border-radius: 0.25rem;}
    .opciones0::-webkit-scrollbar-thumb{      background: rgb(   78, 78, 78);border-radius: 0.25rem;}
    .opciones0::-webkit-scrollbar-thumb:hover{background: rgb(   55, 55, 55);}
    .opciones0::-webkit-scrollbar-corner{background: var(--bg-card-color);}/* la esquina inferior de la barra de desplazamiento, donde se unen las barras de desplazamiento horizontal y vertical. */ 
    
    @keyframes fadeIn {
    from {
    transform: translateY(-50px) scale(.5);
    }
    to {
    transform: translateY(0) scale(1);
    }
    }
    .contenido-opcion {margin: 0.5rem;;padding: 0.5rem;background:  var(--bg-color);
      display: flex;justify-content: start;align-items: center;
      font-size: var(--font-size1);font-family: var(--font-family1);font-weight: var(--font-weight1);
      white-space: nowrap;
      transition: .5s ease all;
    } 
  
    .contenido-opcion:hover{cursor: pointer;background:  var(--button-color);
        font-size: var(--font-size1);font-family: var(--font-family1);font-weight: var(--font-weight1);
        color:  var(--pr1mary-color);
    } 
    #buscado{color: #ffff00;opacity: 0.5;} 
    .contenido-opcion0 input{background: var(--bg-color);width: 80%;border: 1px solid var(--border-color);padding: 0.5rem; margin: 0.5rem;}  
    .contenido-opcion0 input:hover{background:#00000000; } 
    /* FIN DE: PARA LISTA DE OPCIONES */
  
    .table_quote{background: #0000ff;color: var(--text-color); font-size: var(--font-size3);font-family: var(--font-family2); font-weight: var(--font-weight2);}
    .table_quote .td_quote1{background: #000011;border-bottom: 1px solid var(--border-color);}
    .table_quote .td_quote2{background: #000011;border-bottom: 1px solid var(--border-color);text-align: right; padding: 0.5rem;margin: 0;}
    .table_quote .td_quote2 span{background: #005500;white-space: nowrap;}
  </style>
</head>
<body  onload="onload()">
 
  <div style="display: flex;justify-content: start;align-items: center;    color: var(--text-color); font-size: var(--font-size4);font-family: var(--font-family2); font-weight: var(--font-weight2);">
    <div id="reloj"></div>
    <?php echo 'Reloj1: &nbsp;' ?>
    <div id="reloj1">00</div><?php echo '&nbsp;&nbsp; Reloj2: &nbsp;' ?><div id="reloj2">00</div>
  </div>
  <input type="button" id='SALUDAME' value="ACTUALIZAR" onclick="datos() , texto();">
  <input type="text" id="texto" value="0.0">Timer: 60000 ms 
  <div id="quote0" style="background:rgb(10, 46, 0);font-size: 1rem;"></div><br>

  <div id="quote1" style="background:rgb(26, 0, 46,1);font-size: 1rem;"></div>
  <div id="quote2" style="background:rgb(26, 0, 46,1);font-size: 1rem;"></div>
  <div id="quote3" style="background:rgb(26, 0, 46,1);font-size: 1rem;"></div>
  <div id="quote4" style="background:rgb(26, 0, 46,1);font-size: 1rem;"></div><br>

  <div ><span id='price0' class="precio" ></span></div>
  <div ><span id='price' class="precio" ></span></div>
  
  <div style="">
    <div ><span id='precio01' class="precio" ></span></div>
    <div ><span id='precio02' class="precio" ></span></div>
    <div ><span id='precio03' class="precio" ></span></div>
    <div ><span id='precio04' class="precio" ></span></div><br>

    <div ><span id='total' class="precio" ></span></div>


    <div style="display: flex;justify-content: center;align-items: center;" ><svg id="svgUP1"   style="display: none;fill: rgba(0,255,0,0.95); width: 1.5rem;height: 1.5rem; " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 3 24 20"><path d="M15,20H9V12H4.16L12,4.16L19.84,12H15V20Z" /></svg></div>
    <div style="display: flex;justify-content: center;align-items: center;" ><svg id="svgDOWN1" style="display: none;fill: rgba(255,0,0,0.95); width: 1.5rem;height: 1.5rem; " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 1 24 20"><path d="M9,4H15V12H19.84L12,19.84L4.16,12H9V4Z" /></svg></div>
    <div style="display: flex;justify-content: center;align-items: center;"><span class='usd'></span></div>
  </div>
  
<script>
	function saludame(){ 
    let texto='wwwwwwwwwww';
    var parametros = 
    {
      "nombre" : texto,
      "apellido" : "hurtado",
      "telefono" : "123456789"
    };
    $.ajax({
      data: parametros,
      url: 'codigo_php2.php', 
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

  let TIMER=0, CONTADOR=0, price='', d1=13, precio1, old_price1=0 ,  r="rgba(255,0,0,0.95)", v='rgba(0,255,0,0.95)', fiat='USD';
  
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
      }

      let D2=D1.substring(0 , ceros.length+2); 
     
      if (E1.length > 3) {// ← SI PARTE ENTERA ES MAYOR A TRES CIFRAS RETORNA: 3,210.55  3,210,567.55 ...
        n1=E1+'.'+(String(a).split('.'))[1];
        return F1(n1,2);
      } 
      else {// ← FORMATO PARA PARTE ENTERA IGUAL O MENOR QUE 3: 888.3467321444   123.0467321444   12.000366543333   0.000002567856  RETORNA: 888.55  123.04655  12.0003655  0.000002555  ...
        let n2=E1+'.'+D2 + String((a.toFixed(1)).split('.')[1]);
        return n2;
      }
  } 

    let n3=8;
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
	
  function datos() { // ← FUNCION PARA SEPARAR 'precio' de 'quote': 
    saludame();
    //let quote0= document.getElementById('quote0');
    //let t0=quote0.textContent.replace(/[[]/g,'@[');
    //let t=t0.split('@').slice(2,14);
    //price = t[0].replace('[price] => ','');

    let quote0= document.getElementById('quote0').textContent;
    document.getElementById('quote1').textContent=quote0.replace(/"/g,'').split('@')[0];
    document.getElementById('quote2').textContent=quote0.replace(/"/g,'').split('@')[1];
    document.getElementById('quote3').textContent=quote0.replace(/"/g,'').split('@')[2];
    document.getElementById('quote4').textContent=quote0.replace(/"/g,'').split('@')[3];

    let p1=quote0.replace(/"/g,'').split('@')[0];
    let p2=quote0.replace(/"/g,'').split('@')[1];
    let p3=quote0.replace(/"/g,'').split('@')[2];
    let p4=quote0.replace(/"/g,'').split('@')[3];

    let price1 = document.getElementById('quote1').textContent;
    let price2 = document.getElementById('quote2').textContent;
    let price3 = document.getElementById('quote3').textContent;
    let price4 = document.getElementById('quote4').textContent;

    let r1=Number(p1)*0.02677632;
    let r2=Number(p2)*18.30269;
    let r3=Number(p3)*97.91192;
    let r4=Number(p4)*98.901;

    // precio01.innerText='0.02677632 BTC'      +' x '+FD(Number(price1).toFixed(d1)) + ' = '+ FD(r1.toFixed(d1)) + ' USDT';/// *0.02677632 
    // precio02.innerText='18.30269 XRP'        +' x '+FD(Number(price2).toFixed(d1)) + ' = '+ FD(r2.toFixed(d1)) + ' USDT';/// *0.02677632 
    // precio03.innerText='97.91192 FARTCOIN'   +' x '+FD(Number(price3).toFixed(d1)) + ' = '+ FD(r3.toFixed(d1)) + ' USDT';/// *0.02677632 
    // precio04.innerText='98.901 WLD'          +' x '+FD(Number(price4).toFixed(d1)) + ' = '+ FD(r4.toFixed(d1)) + ' USDT';/// *0.02677632
    precio01.innerText='0.02677632 BTC'      +' x '+ F(Number(price1) , 4) + ' = '+ F(r1 , 4) + ' USDT';/// *0.02677632 
    precio02.innerText='18.30269 XRP'        +' x '+ F(Number(price2) , 4) + ' = '+ F(r2 , 4) + ' USDT';/// *0.02677632 
    precio03.innerText='97.91192 FARTCOIN'   +' x '+ F(Number(price3) , 4) + ' = '+ F(r3 , 4) + ' USDT';/// *0.02677632 
    precio04.innerText='98.901 WLD'          +' x '+ F(Number(price4) , 4) + ' = '+ F(r4 , 4) + ' USDT';/// *0.02677632

    let t=r1+r2+r3+r4;

    // document.getElementById('total').textContent='TOTAL = ' + FD(t.toFixed(d1)) + ' USDT';   
    document.getElementById('total').textContent='TOTAL = ' + F(t , 4) + ' USDT';   

    ////////
    document.getElementById('SALUDAME').click();   
    ////////
    /*  1                2                3                4                5                6                7                8  
        117056.54830059  117056.54830059  117027.33021975  117050.7788561                                            
        2.6769518539977  2.6769518539977  2.6772834793582  2.6850984860974                                         
        1.2114176915252  1.2114176915252  1.2099861011665  1.2089878781299                                            
        0.9966215963169  0.9966215963169  0.99549204202995 0.99648702976459                                                                                           
    */

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
    //document.getElementById("SALUDAME").click();;
    //if (document.getElementById('price0').textContent=='') {quote0();} 
    startTimer();
    startTimer1();startTimer2();
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
  //quote0: 103175.72969849   102868.75678894   102447.74303898   102447.74303898                           
  //precio: 103,175.80        103,175.38        102,868.27        102,447.36        ATRASADO 60 SEGUNDOS   

</script>
</body>
</html>
