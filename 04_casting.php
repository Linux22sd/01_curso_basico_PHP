<?php
echo '------------------------------------------------------------------------------------------------------------------' . '<br>';
echo 'Casting'.'<br>';
echo '------------------------------------------------------------------------------------------------------------------' . '<br>';
echo '=== Casting es forzar un tipo de dato a otro deseado:' . '<br><br>';
echo 'casting permitidos:' . '<br><br>';
echo '(int)(integer) forzado a integer' . '<br>';
echo '(bool)(boolean) forzado a bolean' . '<br>';
echo '(float)(double)(real) forzando a float' . '<br>';
echo '(string) forzando a string' . '<br>';
echo '(array) forzando a array' . '<br>';
echo '(object) forzando a object' . '<br>';
echo '(unset) forzando a null' . '<br><br>';

echo '$caracter = "2" Esta variable tiene un caracter de tipo string' . '<br><br>';
echo '$numero = (int)$caracter; Esta variable guarda el valor de $carater pero en integer' . '<br>';  
?>