<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- 
    Navbar
    -----
 -->
 <?php 
       include 'nav.php';
   ?>
   
<!-- 
    Parte de estilo 
    ----------------
 -->
 <style>
     .raio-l{
           font-size: 40px;
       }
       
       .but_cal{
           font-size: 20px;
           border: 4px solid black;
           border-radius: 5px;
           margin: 0;
           position: absolute;
           top: 138%;
           left: 50%;
           -ms-transform: translate(-50%, -50%);
           transform: translate(-50%, -50%);
           
       }
       .but_cal:hover{
           background-color: aqua;
       }
       .fiel_cal{
           width: 50%;
           margin-left: 25%;
           border: 4px solid black;
           border-radius: 5px;
           text-align: center;
       }
       .inp_cal, button, legend, .fiel2-cal{
        font-size: 12px;
       }
       .fiel2-cal, .inp_cal, select{
           margin-right:3px;
           border: 1px solid black;

       }
       .leg_cal{
           font-size: 16px;
       }
       .leg2_cal{
           font-size: 40px;
       }
       .img_cal{
           width: 664px;
           height: 372px;
           margin-left: 25%;
           } 
        .fiel_cal{
           color: black;
           font-size: 12px;
           border: 1px solid black;
       }
       .operator{
        border: 1px solid black;

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
       .divc_cal{
           margin-left: 32px;
       }
       @media screen and (max-width: 500px){
           .but_cal{
               top: 878px;
           }
           .fiel_cal, .leg_cal{
            text-align: center;
           }

           @media screen and (max-width: 500px){
           label{
               font-size: 20px;
               margin-left: 2px;
           }
           .img_cal{
           width: 364px;
           height: 172px;
           margin-left: 1%;
           }
          
           .p_cal{
               font-size: 11px;
               margin-left: 8px;
               margin-right: 9px;
           }
           .container{
               container:flexion;
               display: container;
           }
           .h1_cal{
               margin-left: 8px;
               font-size: 19px;
           }
           .sel_cal{
               font-size: 12px;
           }
         }
       }
 </style>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1 class="h1t_cal">Calculadora</h1>
<br>
<p class="p_cal">
Calculate your finances with the most complete calculator 
     on the market, no headache with quick answers
</p>
<br>
<p class="p_cal">
Image result for why finance calculator
Unlike the models mentioned above, financial calculators, as the name implies, are used to calculate financial mathematics. With this model it is possible to easily perform compound interest calculations, statistical or mathematical functions, rates of return or amortizations, etc.
</p>
<br>
<img class="img_cal" src="./images/Sabemos o que fazemos!! (2).gif">
<br>
<br>
 <fieldset class="fiel_cal">
<legend class="leg2_cal">Calculate</legend>
 <form>
        <input class="inp_cal" type="text" name="produto1" placeholder="Valor">
        <input class="inp_cal" type="text" name="produto2" placeholder="Taixa">
        <select name="operator">
            <option>None</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiplay</option>
            <option>Divide</option>
            <option name="CDI" >CDI anual</option>
            <option>CDI mensal</option>
        </select>
        <br>
        <br>
        <button class="but_cal" type="submit" name="submit" value="submit">Calcular</button>
    </form>

    <div class="divc_cal"> 
    <fieldset class="fiel_cal">
        <legend class="leg_cal">Resultado</legend>
    <?php
     if (isset($_GET['submit'])){
             $resultado1 = $_GET['produto1'];
             $resultado2 = $_GET['produto2'];
             $operator = $_GET['operator'];
             $tx = 13.75 * 0.0105; /* Taixa da selic vezes 105% do CDI */
             switch ($operator){
                 case"None":
                    echo "Selecione um metodo ";
                break;
                 case"Add":
                    echo $resultado1 + $resultado2;
                break;
                 case"Subtract":
                    echo $resultado1 - $resultado2;
                break;
                 case"Multiplay":
                    echo $resultado1 * $resultado2;
                break;
                 case"Divide":
                    echo $resultado1 / $resultado2;
                break;
                 case"CDI anual":
                    $aa = $resultado1 * $tx;
                    $int = number_format($aa,2,",",".");
                    echo "Sua rentabilidade anual e de: $int";
                break;
                case"CDI mensal":
                    $mm = $resultado1 * $tx;
                    $mc = $mm / 12;
                    $mensal = number_format($mc,2,",",".");                   
                    echo "Sua rentabilidade mensal e de: $mensal";
                break;
             }
     } 
    ?>
    </fieldset>
    <br>
    </fieldset>
    </div>
    <footer>
    <?php
      include 'footer.php'
    ?>  
    </footer>  
</body>
</html>