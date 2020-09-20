<!DOCKTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <?php

    $idade = 30;
    $sal = 1825.54;
    $nome = (string) "Monique"; 
    //se colocar o tipo como int, echo é 0
    // se: (int) "10Monique"; vai aparecer 10. se: (int) "Monique10"; vai aparecer 0.
    // só se considera o número no início da frase
    $casada = false;

    echo $nome. " tem ". $idade. " anos!"; 
    // OU echo "$nome tem $idade anos!";
    
    ?>
</body>
</html>
