<?php

    $nome = "Monique";
    $idade = "30";

   // $Monique = "bla bla bla";

    //echo "O meu nome é ".$nome;

    //echo "<br/>O meu nome é ".$$nome;

    if($idade === 30){
        echo 'Verdadeiro';
    }else{
        echo 'Falso';
    }

    //=== significa identico, tanto o valor como o tipo
    //trocando acima o == por === temos o resultado FALSO

    /*for($i=0; $i <= 10; $i++){

        echo '<hr>';
        echo $i;
        echo '<hr>';
    }*/

    $i = 0;
    while ($i <= 10){

        echo"<br>";
        echo $i;        
        $i++;
        
    }

    echo"<br>";
    echo"<br>";
    printNumero(30);
    echo '<br>';
    printNumero('monique');  //não está definindo tipo, por isso nao da erro
    function printNumero($n){
        echo $n;
    }

    class Pessoa{

        public $nome;
        public $idade;

        public function __construct($nome,$idade){
            $this->nome = $nome;
            $this->idade = $idade;
        }

        public function printNomeEidade(){
            echo $this->nome;
            echo'<br>';
            echo $this->idade;
        }

    }

    echo '<br>';
    echo '<br>';
    $pessoa = new Pessoa('Monique', '30');

    $pessoa-> printNomeEidade();

    echo '<br>';

    $pessoa2 = new Pessoa('Oliveira', '45');

    $pessoa2-> printNomeEidade();

    $arr = ['monique', 'maria', 10];

    echo $arr[2]

?>