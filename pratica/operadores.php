<!DOCKTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    
    <?php
        $n1 = 2;
        $n2 = 3;
        

        echo "O primeiro valor é de $n1 e o segundo valor é de $n2.";
        
        

        echo "<br/>A soma vale ",$n1+$n2;
        echo "<br/>A subtração de $n2 por $n1 é ". ($n2-$n1);
        echo "<br/>A multiplicação é igual a " , $n1*$n2;
        echo "<br/>A divisão é igual a ", $n1/$n2;
        echo "<br/>A média desses dois valores é de ", ($n1+$n2)/2;

        //COMO UTILIZAR VALORES PERSONALIZADOS?

        //vá até ao link em que seu arquivo abre, por exemplo o meu:
        // http://localhost/PHP/pratica/operadores.php
        //observe a mudança
        //http://localhost/PHP/pratica/operadores.php?a=5&b=8
        //agora faça:

        //$n1 = $_GET["a"];
        //$n2 = $_GET["b"];

        //A função GET vai pegar o valor de B e jogar para n2
        
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        
        echo "<h2>NOVOS VALORES DE $n1 e $n2</h2>";

        echo "O primeiro valor é de $n1 e o segundo valor é de $n2.";   

        echo "<br/>A soma vale ",$n1+$n2;
        echo "<br/>A subtração de $n2 por $n1 é ". ($n2-$n1);
        echo "<br/>A multiplicação é igual a " , $n1*$n2;
        echo "<br/>A divisão é igual a ", $n1/$n2;
        echo "<br/>A média desses dois valores é de ", ($n1+$n2)/2;
    ?>
</body>
</html>
