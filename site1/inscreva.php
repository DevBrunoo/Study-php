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
       .img_ins{
           width: 664px;
           height: 372px;
           margin-left: 25%;
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
       .h1t_cal{
           margin-left: 10%;
           font-size: 52px;
       }
       .inp_cal{
           color: black;
       }
       .p_cal{
           color: black;
           font-size: 22px;
           margin-left: 13%;
       }
       @media screen and (max-width: 500px){
           label{
               font-size: 20px;
               margin-left: 2px;
           }
           .img_ins{
           width: 364px;
           height: 172px;
           margin-left: 1%;
           }
           .p_ins{
               font-size: 11px;
               margin-left: 8px;
               margin-right: 9px;
           }
           .container{
               container:flexion;
               display: container;
           }
           .h1_ins{
               margin-left: 8px;
               font-size: 19px;
           }

       }
       
       
       


   </style>
   
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form</title>
    </head>
    <body>
        <h1 class="h1t_cal">Know more about our works</h1>
        <br>
    <div class="container">
         <p class="p_cal">
         That we create the best projects you already know!        </p>
         <br>
         <p class="p_cal"> 
         Now if you still have doubts about who we are and what we do and why we are the best at what we do, send us a message below through some of our partner networks.
        </p>
        <br>
        <img class="img_ins" src="./images/Sabemos o que fazemos!! (1).gif" href="sabemos programar"> </img>
    </div>
        <br>
        <br>
    <div class="container">
      <p class="p_cal">
      Do you want to stay on top of the news that impact your niche of work, sign up now, so you don't fall behind any competition that may exist
      </p>
    </div>
        
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
      <legend class="raio-l">Sign-up</legend>
   <br><br>

       <p>
           <label for="nome">Name: </label>  
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
         <button class="envform" type="submit" name="submit" value="submit">Submit</button>
      </form>
        </section>
          
    </div>

    <?php 

      include 'footer.php'

    ?>
   
    </body>
    </html>
   
   