<?php
echo '------------------------------------------------------------------------------------------------------------------' . '<br>';
echo 'Iniciar y Detener Servidor Apache'.'<br>';
echo 'Concatenar con el (  .  )'.'<br>';
echo 'Sintaxis de Array'.'<br>';
echo 'Imprimir con echo, var_dump(), print_r()'.'<br>';
echo 'Comentar en el codigo'.'<br>';

echo '------------------------------------------------------------------------------------------------------------------' . '<br>';
echo '=== Para iniciar el servidor Apache usamos: ===' . '<br><br>';
echo '--$> systemctl start apache2' . '<br><br>';
echo 'Para detener el servidor Apache usamos:' . '<br><br>';
echo '--$> systemctl stop apache2' . '<br><br>';
echo '------------------------------------------------------------------------------------------------------------------' . '<br>';
echo '=== Sintaxis de un array: ===' . '<br><br>';
echo '$array = [' . '<br>';
echo "--'name'" . ' => ' . "'Luis,'" . '<br>';
echo "--'apellido'" . ' => ' . "'Padilla'" . '<br>';
echo '];' . '<br><br>';

$array = [
    'name' => 'Luis',
    'apellido' => 'Padilla'
];
echo 'Resultado imprimiendo:' . '<br><br>';
echo 'Usando $> var_dump($array);' . '<br><br>';
var_dump($array);
echo 'Resultado:' . '<br><br>';
echo 'Usando $> print_r($array);' . '<br><br>';
print_r($array);
echo '<br><br>';

echo 'Usamos < pre > < /pre > solo para debuging y solo para mostrar en navegador' . '<br><br>';
echo 'echo "< pre >";'.'<br>';
echo 'print_r($array);' . '<br>';
echo 'echo "< /pre >";' . '<br><br>';

echo 'Resultado:' . '<br>';
echo '<pre>';
print_r($array);
echo '</pre>';
echo '------------------------------------------------------------------------------------------------------------------' . '<br>';

echo '=== Para crear comentarios de una sola linea en el codigo usamos (  // o #  ) ==='.'<br>';
echo 'Este no se va a leer o a imprimir'.'<br><br>';
echo '// Este es un comentario ' . '<br>';
echo '# Este es un comentario ' . '<br><br>';
echo '=== Para crear comentarios de varias lineas en el codigo usamos (  /*  */ ) ==='.'<br>';
echo 'Este no se va a leer o a imprimir'.'<br><br>';
echo '/* Este es un comentario ' . '<br>';
echo 'de varias lieas */' . '<br>';
echo '------------------------------------------------------------------------------------------------------------------' . '<br>';
?>
