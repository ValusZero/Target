<?php

$json_path = "./dados.json";
$json = file_get_contents($json_path);  //lendo o JSON passando o caminho do arquivo
$dadosJson = json_decode($json,true); // decodificando json para array associativo
$values = [];
$calculoMedia = [];
$qtdDias = 0;
$valorTotal = 0;
$qtdDiasMaiorMedia = 0;

foreach($dadosJson as $faturamentoDiario){ //percorrendo o json para cada elemento
    
    if($faturamentoDiario['valor'] > 0){ // desconsiderando os dias com faturamento zero
        $qtdDias++;      //incrementando a qtd de dias caso seja maior q zero
        $valorTotal = $valorTotal + $faturamentoDiario['valor']; //somando o valor ao valor total para calcular media
        $values[] = $faturamentoDiario['valor']; //adicionando valor a um array 
    }
}

$maiorValor = max($values); //pega maior valor
$menorValor = min($values); //pega menor valor
$media = $valorTotal / $qtdDias; //calcula a media


foreach($values as $value){ //percorrendo o array de valores para ver se é maior q a media
    if($value > $media){ //caso seja maior q a media, incrementar a qtd de dias
        $qtdDiasMaiorMedia++; 
    }
}

echo "Maior valor: $maiorValor \n";
echo "Menor valor: $menorValor \n";
echo "Media : $media \n";
echo "Qtd. dias Faturamento maior que a média: $qtdDiasMaiorMedia";
?>
