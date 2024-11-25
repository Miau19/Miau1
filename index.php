<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
      --border-radius_tex: 0.25rem;  /* PARA ARCO INTERNO */
      --border-radius: 0.25rem;  /* PARA ARCO EXTERNO (ARCO INTERNO + PADDING)*/
      --transition: color 0.1s, background-color 0.6s ease-in-out;
      --font-family1: 'Saira', 'Saira Expanded SemiBold', sans-serif;/*font-family: "Roboto", sans-serif;*/ /*font-family: Impact, sans-serif;'Times New Roman'; 'Consolas'; 'Oswald'*/
      --font-family2: 'Saira', 'Saira Expanded SemiBold', sans-serif; /*PARA NUMEROS*/ 
      --font-size1: 0.9rem;/*TAMAÑO TEXTO NORMAL --font-size1: 0.80rem;*/ 
      --font-size2: 1.2rem; /*TAMAÑO PARA SUB TITULOS --font-size2: 0.86rem;*/ 
      --font-size3: 1rem; /*TAMAÑO PARA TITULOS --font-size3: 1.25rem; */
      --font-size4: 0.70rem; /*TAMAÑO PARA TELEF CON WIDTH 320PX --font-size4: 0.8rem; */
      --font-size5: 2rem;/* PARA @media screen and  (max-width: 320px) */
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

</style>
</head>
<body >
    <?php echo '<div style="background: #000000;padding: 0.5rem;border-bottom:  1px solid var(--border-color);    color: var(--text-color); font-size: var(--font-size2);font-family: var(--font-family2); font-weight: var(--font-weight2);;">PRECIO DE CRIPTOMONEDAS</div> '.
     '<input type="text" value="0" style="display: none;justify-content: start;align-items: center;background: #00aaaa;border: solid 1px #7e7e7e;padding: 0.5rem;" >
      <input type="text" style="display: none;justify-content: start;align-items: center;background: #00aaaa;border: solid 1px #7e7e7e;padding: 0.5rem;" >'
    ?>

    <!-- <iframe src="https://miau1-hqbpfjgpctgdb3ej.canadacentral-01.azurewebsites.net/" frameborder="0" width="100%" height="700"></iframe> -->
    <iframe src="iframeindex.php" frameborder="0" width="100%" height="700" style="background: rgba(0, 0, 20, 1);"></iframe> 
</body>
</html>



