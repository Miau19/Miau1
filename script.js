function formatear(){
  
function F1(m,n) { //FORMATEA CON n DECIMALES
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

function F2(m) { //ELIMINAR CEROS DEMAS 0.456000 A 0.456 //ELIMINAR CEROS DEMAS 2333.456000 A 2,333.456 
  //console.log('m',m); 
  let cadena= new String(m), rgx = /(\d+)(\d{3})/, d, e, ceros = "", parteDecimal='';//console.log('cadena::::',cadena);//var x = cadena.replace(/,/g,"").split(".");
  if (/[a-zA-Z]/.test(cadena)==true) { //SI ENCUENTRA LETRAS EN LA CADENA: infinity NaN isNaN 5.554680159996e+333
    return cadena; 
  }
  else {//SI ENCUENTRA SOLO NUMEROS Y UN PUNTO EN LA CADENA
      if (/[.]/.test(cadena)==true) {//SI ENCUENTRA PUNTO EN LA CADENA
          e = cadena.split('.')[0];//d: PARTE ENTERA
          d = cadena.split('.')[1];//d: PARTE DECIMAL
          for (let j = d.length-1; j >= 0; j--) { //ELIMINAR CEROS DEMAS 0.456000 A 0.456 
            if (d.charAt(j)!="0") break; ceros += d[j];
          }
          parteDecimal=d.substring(0 ,d.length - ceros.length);
          if(parteDecimal.length==1){parteDecimal=parteDecimal+'0'}//COMPLETA PARTE DECIMAL
          if(parteDecimal==''){parteDecimal='00'}//COMPLETA PARTE DECIMAL
          //AGREGAR COMAS A LA PARTE ENTERA:
          for (let i = 1; i <= Math.trunc(e.length/3); i++) {// trunc OBTIENE LA PARTE ENTERA DE: LA LONGITUD DE e DIVIDIDO POR 3
              e = e.replace(rgx, '$1' + ',' + '$2');  
          } 
          return e+'.'+parteDecimal; //console.log('e....',e);
      } 
      else {
          //AGREGAR COMAS A LA CADENA:
          for (let i = 1; i <= Math.trunc(cadena.length/3); i++) {// trunc OBTIENE LA PARTE ENTERA DE: LA LONGITUD DE e DIVIDIDO POR 3
              cadena = cadena.replace(rgx, '$1' + ',' + '$2');  
          } 
          return cadena+'';
      }
  }
} 

function F3(m,a) { //RETORNA NUMERO CON NOMENCLATURA: K, M, B, T ➡ 2,000,000,000,000 ➡ 2,000,000,000 K, 2,000,000 M, 2,000 B,  2 T   
  //console.log('m',m); 
  let cadena= new String(m), rgx = /(\d+)(\d{3})/, d, e, ceros = "", parteDecimal='';//console.log('cadena::::',cadena);//var x = cadena.replace(/,/g,"").split(".");
  if (/[a-zA-Z]/.test(cadena)==true) { //SI ENCUENTRA LETRAS EN LA CADENA: infinity NaN isNaN 5.554680159996e+333
    console.log('cadena.......',cadena);return cadena; 
  }
  else {//SI ENCUENTRA SOLO NUMEROS Y UN PUNTO EN LA CADENA
    if (/[.]/.test(cadena)==true) {//SI ENCUENTRA PUNTO EN LA CADENA
      e = cadena.split('.')[0];//d: PARTE ENTERA
      d = cadena.split('.')[1];//d: PARTE DECIMAL
      for (let j = d.length-1; j >= 0; j--) { //ELIMINAR CEROS DEMAS 0.456000 A 0.456 
        if (d.charAt(j)!="0") break; ceros += d[j];
      }
      parteDecimal=d.substring(0 ,d.length - ceros.length);
      if(parteDecimal.length==1){parteDecimal=parteDecimal+'0'}//COMPLETA PARTE DECIMAL
      if(parteDecimal==''){parteDecimal='00'}//COMPLETA PARTE DECIMAL
      //AGREGAR COMAS A LA PARTE ENTERA:
      for (let i = 1; i <= Math.trunc(e.length/3); i++) {// trunc OBTIENE LA PARTE ENTERA DE: LA LONGITUD DE e DIVIDIDO POR 3
          e = e.replace(rgx, '$1' + ',' + '$2');  
      }
      let N='', c = e.split(',').length - 1;//console.log('c',typeof c);
      if(c==2)N='M';if(c==3)N='B';if(c==4)N='T';if(c==5)N='C';if(c==6)N='Q';
      if (c>1 && c<=6) {//SI ENTRADAS SON MENORES QUE 21 DIGITOS
      let n=((c-1)*4);//console.log('n',n);
      let r=e.substring(0,e.length-n);//console.log('r',r);
      let R=parseFloat(Number(r.replace(/[,]/g,"."))).toFixed(a)+' '+N;///console.log('e........' ,c,R,e);
      return R;
      } else {//SI ENTRADAS SON MAYORES QUE 21 DIGITOS
        return e+'.'+parteDecimal.substring(0,a);
      }
    } 
    else {
      //AGREGAR COMAS A LA CADENA:
      for (let i = 1; i <= Math.trunc(cadena.length/3); i++) {// trunc OBTIENE LA PARTE ENTERA DE: LA LONGITUD DE e DIVIDIDO POR 3
          cadena = cadena.replace(rgx, '$1' + ',' + '$2');  
      } //console.log('N', N);
      let N='', c = cadena.split(',').length - 1;//console.log('c',typeof c);
      if(c==2)N='M';if(c==3)N='B';if(c==4)N='T';if(c==5)N='C';if(c==6)N='Q';
      if (c>1 && c<=6) {//SI ENTRADAS SON MENORES QUE 21 DIGITOS
      let n=((c-1)*4);//console.log('n',n);
      let r=cadena.substring(0,cadena.length-n);//console.log('r',r);
      let R=parseFloat(Number(r.replace(/[,]/g,"."))).toFixed(a)+' '+N;//console.log('c-------' ,c,R,cadena); 
      return R;
      }
      if (c>6 ) {//SI ENTRADAS SON MAYORES QUE 21 DIGITOS //console.log('cadena=====' ,c,cadena);
        return cadena+'';
      }
    }
  }
} 

function F(m,n) {
  let f=F2(F1(m  , n));
  return f;
}

document.getElementById('circulating_supply').textContent=F(document.getElementById('circulating_supply').textContent,2);

}

formatear();




