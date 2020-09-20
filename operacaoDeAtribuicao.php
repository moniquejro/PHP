<!DOCKTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <title>
        
    </title>
</head>
<body>

    <?php
        $preco = $_GET["p"];
        echo "O preço do produto é de R$ $preco";

        $preco = $preco + ($preco*10/100);

        echo "<br/>O novo preço com 10% de aumento é de R$" .number_format($preco, 2, ",", "."); 

        //o calculo tambpem pode ser feito: $preco += ($preco*10/100);

        //tirando 10% seria 

        $preco -= ($preco*10/100);

        echo "<br/>O novo preço com 10% de desconto é de R$" .number_format($preco, 2, ",", "."); 

        /*Esse exercício pretende demonstrar o uso de operadores de incremento e decremento 
        
        OPERADORES DE INCREMENTO

        echo"<br/>Pré-incremento ". ++$a;
        echo"<br/>Pos-incremento ". $a++;
        echo"<br/>Pré-decremento ". --$a;
        echo"<br/>Pos-incremento ". $a--;*/

        $atual = $_GET["aa"];
        echo "<br/>O ano atual é $atual e o ano anterior é ". --$atual;

        /*VARIAVEIS REFERENCIADAS

        $a = 3;
        $b = $a;
        $b+= 5;
        echo $a; 3
        echo $b; 8

        OUTRO MODO

        $a = 3;
        $b = &$a;
        $b += 5;
        echo $a; 8
        echo $b; 8
        */

        $a = 3;
        $b = &$a;
        $b += 5;
        
        echo "<br/>A variavel A vale $a";
        echo "<br/>A varial B vale $b";


        /*
        VARIAVEL DE VARIAVEL
        */

        $site = "cursoEmVideo";
        $$site = "cursoPHP"; 

        echo "<br/>".$site;
        echo "<br/>".$cursoEmVideo;

        $x = "abc";
        $$x = "def";

        echo "<br/>O conteúdo da variavel X é $x.";
        echo "<br/>A variavel ABC criada recebeu o valor $abc";
    ?>
</body>
</html>
