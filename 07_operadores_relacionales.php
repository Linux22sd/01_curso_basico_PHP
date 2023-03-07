<?php
echo '=== Operadores Relacionales ==='.'<br><br>';

echo '== Igual que'.'<br>';
echo '=== Exacto que'.'<br>';

echo '> Mayor que'.'<br>';
echo '< Menor que'.'<br>';
echo '>= Mayor o Igual que'.'<br>';
echo '<= Maenor o Igual que'.'<br>';

echo '!= Diferente que'.'<br>';
echo '!== Exactamente Diferente que'.'<br>';

echo '?? Fusion de null'.'<br>';
echo '<=> Nave espacial'.'<br><br><br>';

echo '=== Igualdad de valores no de tipo ==='.'<br><br>';
echo '2 == "2" // true' . '<br><br>';

echo '=== Igualdad exacta de tipo ===' . '<br><br>';
echo '2 === "2" // false' . '<br>';
echo '2 === 2 // true' . '<br><br>';

echo '=== Mayor que, Menor que, Mayor o Igual que, Menor o igual que ===' . '<br><br>';
echo '2 > 1 // true' . '<br>';
echo '1 < 2 // true' . '<br>';
echo '2 >= 2 // true' . '<br>';
echo '2 <= 2 // true' . '<br><br>';

echo '=== Diferente que por valor y por tipo ===' . '<br><br>';
echo '2 != "2" // false' . '<br>';
echo '2 !== "2" // true' . '<br><br>';

echo '=== Con el operador fusion de nul: ==='.'<br>';
echo 'Si el valor no se encuentra tomara el valor despues de ??'.'<br><br>';

echo '$name = "Luis";' . '<br>';
echo 'echo $apellido ?? $name;' . '<br><br>';
$name = "Luis";
echo 'Resultado:' . '<br>';
echo $apellido ?? $name;
echo '<br><br>';


echo '=== Con el operador Nave Espacial retornara: ==='.'<br>';
echo '-1 si el numero de la izquierda es menor que el de la derecha'.'<br>';
echo ' 0 si el numero de la izquierda es igual que el de la derecha'.'<br>';
echo ' 1 si el numero de la izquierda es mayor que el de la derecha'.'<br><br>';

echo 'echo 2 <=> 3 ; // -1'.'<br>';
echo 'echo 2 <=> 2 ; //  0'.'<br>';
echo 'echo 4 <=> 3 ; //  1'.'<br>';



?> 