<?php

$var = 198;

if(isset($var) & is_int($var)){
  echo "A variavel existe e é inteiro.";
} else {
  echo "Ou não existe ou não é inteiro.";
}

//var_dump($var);

//echo $var;

$varArray = [ 
  "nome" => "Pedro Luiz", 
  "endereco" => "Av Taquara", 
  "telefone" => "(51) 5151-51511" 
];

if(is_array($varArray)){
  echo "é um array ";
  if(isset($varArray["endereco"])){
    print_r("A chave endereco existe <br>") ;
  }

}else {
  echo "não é um array" ;
}

$var2 = "romarinho";

if($var2 == "romarinho" & is_string($var2)){
  echo "é uma string e é romarinho";
}else {
  echo "não é romarinho ou não é uma string";
}



//print_r($varArray) ;