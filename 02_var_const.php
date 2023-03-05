<?php
echo '------------------------------------------------------------------------------------------------------------------' . '<br>';
echo 'Variables'.'<br>';
echo 'Constantes'.'<br>';
echo '------------------------------------------------------------------------------------------------------------------' . '<br>';
echo '=== Para definir una variable usamos el signo ( $ ) al principio de el nombre de la variable ===' . '<br><br>';
echo '$name = "Luis";' . '<br>';
$name = 'Luis';
echo 'Imprimimos con un echo' . '<br><br>';
echo 'echo $name;' . '<br><br>';
echo 'Resultado:' . '<br>';
echo $name . '<br>';
echo '------------------------------------------------------------------------------------------------------------------' . '<br>';
echo '=== Para definir una Costante usamos la funcion (  define( "NOM_DE_VAR" , valor ) ===' . '<br>';
echo 'Los nombres de las constantes deben de ir con mayuscula' . '<br>';
echo 'Para imprimir constantes no es necesario poner el signo ( $ ) antes del nombre de la constante' . '<br><br>';
echo 'define ( "pi", 3.1416 )' . '<br>';
define('PI', 3.1416);
echo 'Imprimimos con un echo' . '<br><br>';
echo 'echo PI;' . '<br><br>';
echo 'Resultado:' . '<br>';
echo PI . '<br>';
echo '------------------------------------------------------------------------------------------------------------------' . '<br>';

?>