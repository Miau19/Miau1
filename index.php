<!DOCTYPE html>
<html lang="es">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css"/>
    <title>Consumir API PHP</title>
</head>
<body onload="onload()">
    <form action="" id="formulario" style="display: inline;">
        <input type="text" name="usuario" id="usuario" value="BTC">
        <input type="text" name="pass" value="333">
        <button type="submit" id="ENVIAR">Enviar Formulario(actualizar precio)</button>
    </form> 
    <div id="reloj1"></div>
    <div>
        <div id="simboloC" style="display: block;background: #0222c0;cursor: pointer;">BTC</div>
        <div id="opcionC" style="display: none;background: #018b2200;">
            <div class="contenido-opcion0"><input type="text" id="buscar"  placeholder="Escribir simbolo"></div>
            <div id="coincidencias">0</div>     
            <div class="contenido-opcion" name="" id="buscado">-------</div>
            <div class="opciones0" id="opciones03"> 
                <div class="contenido-opcion" name="contenido_opcion3">AVAX</div>
                <div class="contenido-opcion" name="contenido_opcion3">BNB</div>
                <div class="contenido-opcion" name="contenido_opcion3">BTC</div>
                <div class="contenido-opcion" name="contenido_opcion3">DOGE</div>
                <div class="contenido-opcion" name="contenido_opcion3">ETH</div>
                <div class="contenido-opcion" name="contenido_opcion3">SOL</div>
                <div class="contenido-opcion" name="contenido_opcion3">XRP</div>
                <div class="contenido-opcion" name="contenido_opcion3">NEAR</div>
                <div class="contenido-opcion" name="contenido_opcion3">ICP</div>
                <div class="contenido-opcion" name="contenido_opcion3">TAO</div>
                <div class="contenido-opcion" name="contenido_opcion3">FET</div>
                <div class="contenido-opcion" name="contenido_opcion3">RENDER</div>
                <div class="contenido-opcion" name="contenido_opcion3">GRT</div>
                <div class="contenido-opcion" name="contenido_opcion3">TIA</div>
                <div class="contenido-opcion" name="contenido_opcion3">MANTA</div>
                <div class="contenido-opcion" name="contenido_opcion3">PYTH</div>
                <div class="contenido-opcion" name="contenido_opcion3">PEPE</div>
             </div> 
        </div>

    </div>
    <div style="display: flex;justify-content: start;align-items: center;">
        <div >
        <span id='nombre' class="precio" ></span><span id='simbolo' class="precio" ></span><span id='precio' class="precio" ></span>
        </div>
        <div style="display: flex;justify-content: center;align-items: center;" ><svg id="svgUP1"   style="display: none;fill: rgba(0,255,0,0.95); width: 1.5rem;height: 1.5rem; " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 3 24 20"><path d="M15,20H9V12H4.16L12,4.16L19.84,12H15V20Z" /></svg></div>
        <div style="display: flex;justify-content: center;align-items: center;" ><svg id="svgDOWN1" style="display: none;fill: rgba(255,0,0,0.95); width: 1.5rem;height: 1.5rem; " xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 1 24 20"><path d="M9,4H15V12H19.84L12,19.84L4.16,12H9V4Z" /></svg></div>
        <div style="display: flex;justify-content: center;align-items: center;"><span class='usd'>USD</span></div>
      </div>
      <div style="overflow: auto;padding: 5px;background: #000000;">
        <table class="table_quote" ><!--datos cotizaciones -->
          <tr><td class="td_quote1">Volumen 24h&nbsp;              </td> <td class="td_quote2"><span id="volume_24h">        </span></td></tr>
          <tr><td class="td_quote1">Cambio volumen 24h&nbsp;       </td> <td class="td_quote2"><span id="volume_change_24h" ></span></td></tr>
          <tr><td class="td_quote1">Cambio porcentual 1h&nbsp;     </td> <td class="td_quote2"><span id="percent_change_1h" ></span></td></tr>
          <tr><td class="td_quote1">Cambio porcentual 24h&nbsp;     </td> <td class="td_quote2"><span id="percent_change_24h"></span></td></tr>
          <tr><td class="td_quote1">Cambio porcentual 7d&nbsp;     </td> <td class="td_quote2"><span id="percent_change_7d" ></span></td></tr>
          <tr><td class="td_quote1">Cambio porcentual 30d&nbsp;    </td> <td class="td_quote2"><span id="percent_change_30d"></span></td></tr>
          <tr><td class="td_quote1">Cambio porcentual 60d&nbsp;    </td> <td class="td_quote2"><span id="percent_change_60d"></span></td></tr>
          <tr><td class="td_quote1">Cambio porcentual 90d&nbsp;    </td> <td class="td_quote2"><span id="percent_change_90d"></span></td></tr>
          <tr><td class="td_quote1">Capitalización de mercado&nbsp;</td> <td class="td_quote2"><span id="market_cap">        </span></td></tr>
          <tr><td class="td_quote1">Dominio de la capitalización de mercado&nbsp;</td><td class="td_quote2"><span id="market_cap_dominance"></span></td></tr>
          <tr><td class="td_quote1">Ranking&nbsp;</td><td class="td_quote2"><span id="cmc_rank"></span></td></tr>

        </table>
       </div>
    <div id="respuesta" style="background: blue;overflow: auto;">|</div>
    <div id="respuesta3" style="background: rgb(0, 35, 0);overflow: auto;">|</div>


    <script>
        let TIMER=0, CONTADOR=0, price='', d1=13, precio1, old_price1=0 ,  r="rgba(255,0,0,0.95)", v='rgba(0,255,0,0.95)', fiat='USD', ARRAY3;
  
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
              N1=Number(N1).toFixed(8);  ///NEUTRALIZAR NOTACION CIENTIFICA : 2.1704260098014E-5 A 0.0000217
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

        formulario.addEventListener('submit',function (e) {
            e.preventDefault();
            var datos=new FormData(formulario);
            ///console.log(datos.get('usuario'));
            fetch('post.php',{
                method: 'POST',
                body: datos
            })
            .then(res=>res.json())
            .then(data=>{
                //console.log(data)
                respuesta.innerHTML=`${data}`;
                let array1=data.split('@')[0]
                ,array2=data.split('@')[1]
                ,array3=data.split('@')[2]
                ,n=nombre.textContent; console.log('array3.....',array3);
                ARRAY3=array3.split(',');; console.log('ARRAY3.....',ARRAY3);
                respuesta3.innerHTML=ARRAY3;

                nombre.innerHTML = (n=='')?    array1.split(',')[1] :    array2.split(',')[1] ;
                simbolo.innerHTML= (n=='')?    array1.split(',')[2] :    array2.split(',')[2] ;
                precio.innerHTML = (n=='')? FD(array1.split(',')[3]): FD(array2.split(',')[3]);
                simboloC.innerHTML=(n=='')?    array1.split(',')[2] :    array2.split(',')[2] ;             

                let volume_24h           = (n=='')? FD(array1.split(',')[4] ): FD(array2.split(',')[4] )
                ,volume_change_24h       = (n=='')? FD(array1.split(',')[5] ): FD(array2.split(',')[5] )
                ,percent_change_1h       = (n=='')? FD(array1.split(',')[6] ): FD(array2.split(',')[6] )
                ,percent_change_24h      = (n=='')? FD(array1.split(',')[7] ): FD(array2.split(',')[7] )
                ,percent_change_7d       = (n=='')? FD(array1.split(',')[8] ): FD(array2.split(',')[8] )
                ,percent_change_30d      = (n=='')? FD(array1.split(',')[9] ): FD(array2.split(',')[9] )
                ,percent_change_60d      = (n=='')? FD(array1.split(',')[10]): FD(array2.split(',')[10])
                ,percent_change_90d      = (n=='')? FD(array1.split(',')[11]): FD(array2.split(',')[11])
                ,market_cap              = (n=='')? FD(array1.split(',')[12]): FD(array2.split(',')[12])
                ,market_cap_dominance    = (n=='')? FD(array1.split(',')[13]): FD(array2.split(',')[13])
                ,cmc_rank                = (n=='')?   (array1.split(',')[0] ):   (array2.split(',')[0] )
                ; 
                document.getElementById('volume_24h').          innerHTML=volume_24h          ;
                document.getElementById('volume_change_24h').   innerHTML=volume_change_24h   ;
                document.getElementById('percent_change_1h').   innerHTML=percent_change_1h   ;
                document.getElementById('percent_change_24h').  innerHTML=percent_change_24h  ;
                document.getElementById('percent_change_7d').   innerHTML=percent_change_7d   ;
                document.getElementById('percent_change_30d').  innerHTML=percent_change_30d  ;
                document.getElementById('percent_change_60d').  innerHTML=percent_change_60d  ;
                document.getElementById('percent_change_90d').  innerHTML=percent_change_90d  ;
                document.getElementById('market_cap').          innerHTML=market_cap          ;
                document.getElementById('market_cap_dominance').innerHTML=market_cap_dominance;
                document.getElementById('cmc_rank').            innerHTML=cmc_rank            ;    
            }) 
        })
         /*
        let datos=new FormData(formulario);

        function enviar(){
            fetch('post.php',{
                method: 'POST',
                body: datos
            })
            .then(res=>res.json())
            .then(data=>{
                console.log(data)
                respuesta.innerHTML=`${data}`;
                //let array1=data.split('@')[0]
                //,array2=data.split('@')[1];  console.log('array2.....',array2);

                //nombre.innerHTML =array1.split(',')[0];
                //simbolo.innerHTML=array1.split(',')[1];
                //precio.innerHTML =FD(array1.split(',')[2]);
                //simboloC.innerHTML=array1.split(',')[1];
            })
        }
        //enviar();
        */
        function reloj1() {
            var mydate0=new Date(), ss = new String(mydate0.getSeconds()); 
            document.getElementById("reloj1").innerText=ss;
            ENVIAR.click();
        }

        var timerID, timerID1, timerID2; 
        function startTimer() {timerID=window.setInterval(enviar,60000);}
        function stopTimer() {clearInterval(timerID);} 
        function startTimer1() {timerID1=window.setInterval(reloj1,1000);}
        function stopTimer1() {clearInterval(timerID1);} 
        //startTimer1();// price: 97824.743890165  97831.413331412 97846.819100209

        let OPCIONES=0, SIMBOLO=0, opcion='';
        simboloC.addEventListener("click", () => {
            (SIMBOLO==0)? (opcionC.style.display='block', SIMBOLO=1, buscado.innerText='-------',buscar.value=''):(opcionC.style.display='none',SIMBOLO=0) ;
            coincidencias.innerText='0';
        });

        for (let y = 0; y < document.getElementsByName('contenido_opcion3').length; y++) { // RECORRE CADA CASILLA
         let o=document.getElementsByName('contenido_opcion3')[y];  
         o.addEventListener('click', function (e) {
            if (o.textContent != '-------') {
            simboloC.innerText = o.textContent;
            //simbolo.innerText=o.textContent;
            usuario.value=o.textContent;
            ENVIAR.click();
            opcionC.style.display='none'; SIMBOLO=0;
            coincidencias.innerText='0';
            }
         })
       }  

       let index='';
        //CASILLA id="buscar" :
        document.getElementById('buscar').addEventListener("input", (e) => {
          let cadena=buscar.value.replace(/ /g, '');
          if (cadena=='') buscado.textContent='-------';
          else {
              buscado.innerHTML = '';
              let texto =buscar.value.toLowerCase();//* toUpperCase
              for(let i = 0; i < ARRAY3.length; i++){
                 let nombre = ARRAY3[i].toLowerCase();
                 if(nombre.indexOf(texto) !== -1){
                     index=i; //console.log('index......',index);
                     let r=ARRAY3[index].toLowerCase().replace(texto, `<span class='coincidirTex'>${texto}</span>`);//console.log('r...',r);
                     let div = document.createElement("div");//USAR createElement PARA UNA MAYOR RAPIDEZ 
                     div.setAttribute('name','option0');div.setAttribute('class','option0');div.setAttribute('onclick',`insertar(${index})`);
                     div.innerHTML = r;
                     buscado.appendChild(div);
                     coincidencias.innerText='Total encontrado: '+ buscado.children.length; //console.log('buscado.children.length......',buscado.children.length);
                     //opcionesXX.style.display='none';buscado0.style.display='block';
                   } 
               }
            }
        });
        function insertar(x) {
            simboloC.innerText=ARRAY3[x]; console.log('ARRAY3[x].textContent......',ARRAY3[x]);
            usuario.value=ARRAY3[x];
            opcionC.style.display='none'; SIMBOLO=0;
            coincidencias.innerText='0';
            ENVIAR.click();
        } 


        function onload() {ENVIAR.click(); startTimer1();}

    
    </script>
</body>
<!-- https://www.youtube.com/watch?v=nLrL9Ip3tWI&list=PLHW-COpapaVuXpbYgOPMLcaFXEmr6JUoi&index=22 -->

</html>
