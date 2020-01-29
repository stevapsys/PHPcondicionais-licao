<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

<?php

// 1.	Definir duas variáveis com números, comparar com um if para decidir qual deles é maior e imprimir “O maior
// número é N”, sendo que N é o valor da maior variável. a.	Adicionar um else ao exercício anterior para cobrir o caso inverso.//

$numero1 = 100;
$numero2 = 10; 

	if ($numero1 > $numero2) {
    echo 'O maior número é ' . $numero1; 
} elseif  ($numero1 < $numero2) {
    echo 'O maior número é ' . $numero1; 
}

?>
<br>

<?php

// 2.	Usando a função mt_rand(x,y), em que “x” é o número mínimo e “y” é o número máximo, gerar um número aleatório
// entre 1 e 5, atribuí-lo a uma variável e imprimir essa variável apenas se o número gerado for 3 ou 5.



$aleatorio = mt_rand(1, 5); 

if ($aleatorio == 3 or $aleatorio == 5) {
    echo $aleatorio; 
}

?>

<br>

<?php

// 3.	Utilizando a variável do exercício anterior, imprimir “O número NÃO é 3” caso essa premissa seja verdadeira. 
// Caso o número seja 3, imprimir simplesmente o número 3.

$aleatorio = mt_rand(1, 5); 

if ($aleatorio == 3) {
    echo $aleatorio; 
 } else {
    echo 'O número não é 3';
}

?>

<br>

<?php

//4. Gerar um número entre 1 e 100, verificar se é maior que 50. 
//Caso seja verdadeiro, retornar “O número é maior que 50” e, caso seja falso: “O número é menor que 50”.

$umEcem = mt_rand(1, 100); 

if ($umEcem > 50 ) {
    echo 'O número é maior que 50';
} else {
    echo 'O número é menor que 50';
}

?> 

<br>

<?php

//5.	Gerar um número aleatório entre 0 e 100. Se ele for maior que 50 e par, imprimir “O número cumpre a condição”.
// Caso contrário, imprimir “O número NÃO cumpre a condição”
//a.	Modificar o exercício anterior para que o número 0 também cumpra a condição. 

$zeroEcem = mt_rand(0, 100); 

if(($zeroEcem  % 2 == 0) && ($zeroEcem > 50) || ($zeroEcem == 0)) {
    echo 'O número cumpre a condição' . $zeroEcem;  
} else {
    echo 'O número não cumpre a condição' . $zeroEcem; 
}


?> 

</body>
</html>