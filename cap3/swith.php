<!-- 
    Voce pode definir swith
    como uma variante de if-else
    e muito usado quando voce precisa 
    comparar uma variavel
    com um grande numeros de valores
    ------------------------------------------------
 -->

 <?php 
 switch($category) {
     case "news";
     echo "<p>O que esta acontecendo ao redor do mundo</p>";
     break;
     case "weather":
        echo "<p>Sua previsao semanal</p>";
        break;
        case "sports";
        echo "<p>Ultimas noticias esportivas</p>";
        break;
        default:
        echo "<p>Bem-vindo ao meu site web</p>";
 }

 ?>

 <!-- 
     Sem o uso da expressao break
     todas funcionalidades irao ser executadas
     obtendo um resultado diferente do esperado
     ----------------------------------------------
  -->

  <!-- 
      Expressoes de looping
      Embora existam variadas abordagens, 
      expressoes de looping sao fixas
      em toda lingugaem padrao executando todas as tarefas a 
      ate a funcao ser finalizada
      ----------------------------------------------------------
   -->

