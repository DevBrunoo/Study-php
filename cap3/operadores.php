<!-- 
    Operadores sao entradas de uma expressao
    Voce talvez ja esteja familarizado com a manipulacao 
    e o uso de operdos tanto com a programacao e contas de matematicas

    Um operador e um simbolo que especifica uma acao em uma expressao as vezes
    A precedencia e companhia de operadores sao coisas indispensaveis em uma linguagem 
    Existe muitos operadores
    --------------------------------------------------------------------------
 -->

 <?php 
$a++; //$a é o operando
$sum = $val1 + $val2; // $sum, $vall e $val2 sao operandos
 ?>

 <!-- 
     Precendencia de operadores
     PHP segue as regras de dependencias padroes usadas no primario 
     --------------------------------------------------------------
  -->

  <!-- 
      Exemplo:
   -->

<?php 
  $total_cost = $cost + $cost * 0.06;
  //Isso e o mesmo que escrever (precedencias)
  $total_cost = $cost + ($cost * 0.06);
  //porque o operador de multiplicação tem pedencias maior que o de adição
?>


<!-- 
    Operadores aritimeticos
    esses operadores serão usados com bastante frequencia em seus codigos
    Eles sao basicamente faceis de usar e o PHP
    oferece diversas uma variedade de funcoes matematicas ja pre definidas 

    Exemplos desses operadores sao: subtracao, adicao, Multplicacao, Modulos etc..
    -----------------------------------------------------------------------    
 -->

 <!-- 
     Operadores de designacao ou (atribuicao)
     Basicamente eles designam valor de algo que 
     quase sempre e uma variavel porem existe
     (operadores de designacao de atalho) que compartilham
     de outras funcionalidades 

     Exemplos: = Atribuir, += Soma-atribui, += Mulplica-atribui, /= Divide-atribui, .= Concatena-atribui
    -----------------------------------------------------------------------------------  
-->

<!-- 
    Operadores de incremento (++) e decremento (--)
    pode ser usado para acrescentar 1 ou subtrair um da variavel

    Exemplo: 
    ++$a, $a++ incremento incrementa $a em 1
    --$a, $a-- Decremento decrementa $a em 1
    ------------------------------------------------------------
 -->

 <?php 
  $inv = 15; //atribui o valor inteiro 15 para $inv
  $oldInv = $inv--; //Atribui o $oldInv o valor de $inv, entao decrementa $inv
  $origInv = ++$inv; //Incrementa $inv, e atribui o novo valor de $inv para $origInv
 ?>


<!-- 
    Operadores logicos estarao com voce na maior parte
    de seu projeto, eles tem um papel muito importante 
    oferencendo uma maneira de tomar decisoes besado em valor 
    das variaveis.

    Esses operadores sao usado comumentes com estruturas de controle
    tais como if(se) e os loops while()

    Exemplos: $a && &b Verdade se ambos forem verdadeiros 
    $a AND $b verdade se ambos $a e $b forem verdadeiros
    $a || $b verdade se ambos $a e $b forem verdadeiros
    a outros que recomendo voce a pesquisar
 -->

<!-- 
    Operadores de igualdade
    Um erro comun de programadores de tentar testar 
    igualdade somente com um sinal de ( = )

    Exemplos:
    $a == $b E igual a  Verdadeiro se $a e $b forem equivalentes
    $a != $b Não e igual a Verdadeiro se $a nao for igual a $b
    $a === $b E indentico a Verdadeiro se $a e $b forem do mesmo tipo
    -----------------------------------------------------------------
 -->

 <!-- 
     Operadores de comparacao 
     Assim como operadores logicos oferecem um metodo 
     para adicionar fluxo de programa atraves de uma avaliacao 
     dos valores comparativos de duas ou mais variaveis

     Ex: $a < $b  Menor que Verdadeiro se menor que $b
     $a > $b Maior que  Verdadeiro se $a maior que $b
     $a <= $b Menor ou igual a Verdadeiro se $a e menor ou igual a $b
     $a >= $b maior ou igual a Verdadeiro se $a e maior ou igual a $b

     Lembresse que esses operadores sao usados apenas para comparar valores
     se voce quiser tentar com string pode ficar chateado
     ---------------------------------------------------
  -->


  <!-- 
      Operadores Bitwise

      Esses operadores examinam e manipulam valores 
      inteiros em niveis bits individuais que criam 
      o valor inteiro. Para entender isso e nescessario 
      um certo nivel de conhecimento binario de inteiros decimais 

      Inteiro decimal   /  Representacao Binaria
      2                     10
      5                     101
      10                     1010
      12                    1100
      145                   10010001
      1,452,012              101100010011111101100

      Esses podem ser os operadores mais complexos 

      Outros exemplos
       
       Exemplo   rotul0     Resultado
      ˜b          Nao       nega cada bit em $b

      Recomendo pesquisar mais sobre esse assunto 
   -->