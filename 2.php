<?php

// Define o número a ser verificado na sequência de Fibonacci
$num = 21;

// Inicializa as variáveis para o cálculo da sequência
$a = 0;
$b = 1;

// Enquanto b for menor que o número informado, continua calculando a sequência
while ($b < $num) {
    $temp = $a;
    $a = $b;
    $b = $temp + $b;
}

// Verifica se o número informado pertence à sequência
if ($b == $num) {
    echo "$num pertence à sequência de Fibonacci.\n";
} else {
    echo "$num não pertence à sequência de Fibonacci.\n";
}

?>