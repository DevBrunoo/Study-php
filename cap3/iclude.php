<!-- 
    Programadores bons estao sempre pensando
    na reasubilidade do codigo e modularidade
    O meio mais eficaz para fazer isso e isolando 
    componentes de outros arquivos separados, entao
    reunir esse arquivo quando coviniente.

    O php oferece expressoes para que isso seja possivell
    vou mostrar algumas delas.

    1) Require
    2) Include
    

    A expressao include ira avaliar e fornece dados aonde foi chamado
    Voce pode usalo para chamar funcoes que foram executados em tal arquivo
    Exemplo: 
    include(/path/to.file);
    E praticamente a mesma coisa da funcao 
    EJS que o node.js oferece.js

    Exemplo e voce cria um arquivo com o nome
    navbar.php e logo no arquivo home, voce inclui

    include(navbar.php) 

    Com isso os dados que estao no arquivo 
    navbar.php irao aparecer no arquivo home.php
    
    A funcao include_once tem praticamente o mesmo
    objetivo da funcao include. Ex:

    inlcude_once (filename)

    Uma url so pode ser usada com require se 
    allow_url_folpen estiver ativado, o que por padrao estara

    As unicas cruciais diferencas entre require e include e que 
    
    1) O arquivo irar aparecer aonde a contrucao do require aparecer
    2) A execucao de script ira aparecer se uma require falhar.

    Por ultimo existe tambem require_once

    require_once (filename)

    Essa funcao garante que o arquivo seja incluido somente uma vez

-->



