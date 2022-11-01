<!-- 
    Escrita de umm formulario 
    ---------------------------
 -->
<?php 

?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Formulario PHP</title>
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
 
   <form action="form.php" method="GET" name="form"> 
   <fieldset>
   <legend>Formulario PHP</legend>

    <p>
        <label for="nome">Nome: </label>  
         <input name="nome" type="text" id="nome">
    </p>
    <p>
         <label for="email">Email: </label>  
         <input name="email" type="email" id="email">
    </p>
   </fieldset>
   <p>
     <!-- 
          Para fazer o envio temos que 
          definir type como submit
          ------------------------------    
      -->
     <input type="submit" value="Enviar" id="enviar">
   </p>
   </form>

 </body>
 </html>

