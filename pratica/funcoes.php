<!DOCKTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>
        Funções Aritimeticas em PHP
    </title>
    <style> 
        h2 {
            font: 22pt Verdana;
            color:	#fffff1;
            background: linear-gradient(to right, #00ffcc 0%, #ff0066 100%);
            text-align: center;
        }

        p {
            font: 16pt Verdana;
        }
    </style>
</head>
<body>
    
    <?php

        //utilizando "http://localhost/PHP/pratica/funcoes.php?x=4&y=3"

        $v1 = $_GET["x"];
        $v2 = $_GET["y"];

        echo "<h2 >Valores recebidos: $v1 e $v2 </h2>";
        
        echo "O valor absoluto de $v2 é " . abs($v2);
        echo "<br/>O valor de $v1<sup>$v2</sup> é ". pow($v1, $v2);

        //utilizando "http://localhost/PHP/pratica/funcoes.php?x=81&y=3"

        echo "<br/>A raiz de $v1 é ". sqrt($v1);

        //utilizando "http://localhost/PHP/pratica/funcoes.php?x=81&y=3.4"
        //até 0.5 o round é para baixo, acima disso, arredonda para cima.
        //existe o ceil (sempre para cima) e floor (sempre para baixo)
        //os termos acima podem ser substituidos por round

        echo "<br/>O valor de $v2 arredondado é " .round($v2);

        //intval() pega a parte inteira de um valor

        echo "<br/>A parte inteira de $v2 é " .intval($v2);

        //number_format() é a formatação de um número, por exemplo monetário
        //2 é a quantidade de casas decimais desejadas
        //separadores decimais e depois separador de milhar
        
        echo "<br/>O valor de $v1 em moeda é R$". number_format($v1, 2, ",", ".");

    ?>
</body>
</html>
