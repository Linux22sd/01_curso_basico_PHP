<?php
echo '=== Otros Operadores ===' . '<br><br>';

echo '= Asignacion' . '<br><br>';

echo '+ suma normal' . '<br>';
echo '+= suma con valor a la derecha' . '<br>';
echo '++ suma solo (unidad)' . '<br><br>';

echo '- Resta normal' . '<br>';
echo '-= Resta con valor a la derecha' . '<br>';
echo '-- resta solo (unidad)' . '<br><br>';

echo '/ Division normal' . '<br>';
echo '/= Division con valor de la derecha' . '<br><br>';

echo '. Concatenacion' . '<br>';
echo '.= Concatenacion con valor dela derecha' . '<br><br>';

echo '=== operador de asignacion ===' . '<br><br>';
echo '$user = ($name = "luis ") . "Padilla"' . '<br>';
echo 'echo $name;' . '<br>';
echo 'echo $user;' . '<br><br>';
$user = ($name = "luis ") . "Padilla";
echo $name;
echo '<br>';
echo $user;
echo '<br><br>';

echo '=== operador de incremento ===' . '<br><br>';
echo '$contador = 1;' . '<br>';
echo 'Para incrementar su valor en uno mas podemos hacerlo de varias maneras:' . '<br><br>';
echo '$contador = $contador + 1;' . '<br>';
echo '$contador += 1;' . '<br>';
echo '$contador++;' . '<br><br>';
echo 'Todos estas formas nos daran el mismo resultado ( 2 )' . '<br><br>';

echo '=== operador de decremento ===' . '<br><br>';
echo '$contador = 4;' . '<br>';
echo 'Para decrementar su valor en uno mas podemos hacerlo de varias maneras:' . '<br><br>';
echo '$contador = $contador - 1;' . '<br>';
echo '$contador -= 1;' . '<br>';
echo '$contador--;' . '<br><br>';
echo 'Todos estas formas nos daran el mismo resultado ( 3 )' . '<br><br>';

echo '=== operador de concatenacion ===' . '<br><br>';
echo '$nombre = "Luis";' . '<br>';
echo '$apellido = "Padilla";' . '<br>';
echo 'Para Concatenar podemos hacerlo de varias maneras:' . '<br><br>';
echo '$nombre = $nombre . " " . $apellido' . '<br>';
echo '$nombre .= " " . $apellido;""' . '<br>';
echo 'Todos estas formas nos daran el mismo resultado  ( Luis Padilla )' . '<br><br>';

?>