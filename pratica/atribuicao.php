<!DOCKTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>
        
    </title>
</head>
<body>
    <?php
        
        $a =1;
        $b = 3;
        $c = $a + $b;
    
        echo "A soma de A= $a e B= $b é igual a C= $c.";

        $c += 5;
        $b += $a;

        echo "<br/>O valor de C agora é $c";
        echo "<br/>O valor de B agora é $b";

        //se a variavel está somando ela mesma + um pode-se utilizar

        $a++;

        //adição

        $a += $b;

        //subtração
        echo "<br/>A vale $a e B vale $b";
        $a -= $b;
        echo "<br/>Na operação $a -= $b valor de A torna $a";
        echo "<br/>A vale $a e B vale $b";
        $a *= $b;
        echo "<br/>Na operação $a *= $b valor de A torna $a";
        echo "<br/>A vale $a e B vale $b";
        $a/=$b;
        echo "<br/>Na operação $a/=$b valor de A torna $a";
        echo "<br/>A vale $a e B vale $b";
        $a%=$b;
        echo "<br/>Na operação $a%=$b valor de A torna $a";
        echo "<br/>A vale $a e B vale $b";
        $a.=$b;
        echo "<br/>Na operação $a.=$b valor de A torna $a";



    ?>
</body>
</html>


