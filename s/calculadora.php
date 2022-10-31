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
       
       .envform{
           font-size: 20px;
           border: 4px solid black;
           border-radius: 5px;
           margin: 0;
           position: absolute;
           top: 480px;
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
       input, button, legend, .fiel2-cal{
           margin-left: 3px;
       }
       .fiel2-cal, .inp_cal{
           margin-right:3px;
           border: 1px solid black;

       }
       select{
           margin-left:3px;
       }
       .inp_cal{
           color: black;
       }
       .p_cal{
           color: black;
           font-size: 13px;
       }
       .leg2_cal{
           font-size: 15px;
       }
       @media screen and (max-width: 500px){
           .envform{
               top: 520px;
           }
       }
 </style>


<br><br><br>

<fieldset class="fiel_con">
<legend class="raio-l">Calculadora</legend>
<br>
    <form method="get" action="calculadora.php">
        <input class="inp_cal" type="text" name="produto1" placeholder="  Valor">
        <input class="inp_cal" type="text" name="produto2" placeholder="  Taixa">
        <br><br>
        <p class="p_cal">&nbsp; Escolha uma opção no botão ao lado:        
             <select style="border: 1px solid black;">
        </p>
            <option>Opções</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiplay</option>
            <option>Divide</option>
            <option name="CDI" >CDI anual</option>
            <option>CDI mensal</option>
        </select>
        <br>
        <br>
        <button class="envform" type="submit" name="submit" value="submit">Calcular</button>
    </form>
<br>
    <fieldset class="fiel2-cal">
        <legend class="leg2_cal">Resultado</legend>
    <?php
     if (isset($_GET['submit'])){
             $resultado1 = $_GET['produto1'];
             $resultado2 = $_GET['produto2'];
             $operator = $_GET['operator'];
             $tx = 13.75 * 0.0105; /* Taixa da selic vezes 105% do CDI */
             switch ($operator){
                 case"None":
                    echo '<p style="font-size:12px">Selecione um metodo acima</p> ';
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

   
    <!-- 
        Footer
        ------
     -->
    <br><br><br>
   <?php 
       include 'footer.php';
   ?>

</body>
</html>