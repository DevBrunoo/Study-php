<!-- 
    Escrita de umm formulario 
    ---------------------------
 -->

 <?php 
 include 'nav.php';
 ?>
 <br>
 <br>
 <br>
 <br>
   <style>
       .raio-l{
           font-size: 40px;
       }
       
       .envform{
           font-size: 20px;
           border: 4px solid black;
           border-radius: 5px;
           margin: 0;
           position: absolute;
           top: px;
           left: 50%;
           -ms-transform: translate(-50%, -50%);
           transform: translate(-50%, -50%);
           
       }
       .envform:hover{
           background-color: aqua;
       }
       .fiel_con{
           width: 70% ;
           margin-left: 14%;
           border: 4px solid black;
           border-radius: 5px;
       }
       #nomee, #emaill{
        border: 1px solid black;
        border-radius: 5px;
       }
       label {
           font-size: 20px;
           margin-left: 3px;
       }
       @media screen and (max-width: 500px){
           label{
               font-size: 20px;
               margin-left: 2px;
           }
       }
       
       
       


   </style>
   
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario</title>
    </head>
    <body>
        
      <!-- No acrion estamos definindo
           que esse formulario sera inviado
           o arquivo form.PHP.
   
           Com method estamos definindo que 
           o envio sera feito por GET ou seja
           por url
           --------------------------------------
      -->
    
    <div>
        <section>
        <form action="form.php" method="GET" name="form"> 
      <fieldset class="fiel_con">
      <legend class="raio-l">Increva-se</legend>
   <br><br>

       <p>
           <label for="nome">Nome: </label>  
            <input name="nome" type="text" id="nomee">
       </p>
       <p>
            <label for="email">Email: </label>  
            <input name="email" type="email" id="emaill">
       </p>
       <br><br>

      </fieldset>
        <!-- Para fazer o envio temos que 
             definir type como submit
             ------------------------------    
         -->
         <br><br><br>
         <button class="envform" type="submit" name="submit" value="submit">Enviar</button>
      </form>
        </section>
          
    </div>

    <?php 

      include 'footer.php'

    ?>
   
    </body>
    </html>
   
   