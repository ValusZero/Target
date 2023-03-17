<?php

$faturamentoTotal = 0;
$faturamentoMensal = [ //declarando array com todos os valores
    "SP"=> 67836.43,
    "RJ"=> 36678.66,
    "MG"=> 29229.88,
    "ES"=> 27165.48,
    "Outros" => 19849.53
];

foreach ($faturamentoMensal as $key => $value) { // fazendo a soma dos valores
    $faturamentoTotal = $faturamentoTotal + $value;
}

foreach ($faturamentoMensal as $key => $value) { // calculando a porcentagem em cima do total para cada valor
    $porcentagem = (100 * $value) / $faturamentoTotal; //calculo de porcentagem
    $porcentagem = number_format($porcentagem,2); // pegando apenas 2 casas decimais
    echo "Faturamento $key : $porcentagem % \n";
}
?>
