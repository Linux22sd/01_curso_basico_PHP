<?php

// Para iniciar el servidor Apache usamos:  systemctl start apache2

// Sintaxis de un array:

$array = [
    'name' => 'Luis',
    'apellido' => 'Padilla'
];

// Para imprimirlo podemos usar ( var_dump(), print_r() o <pre></pre> )
var_dump($array);

print_r($array);

// El pre lo usamos en en navegador para ver la diferencia
echo "<pre>";
print_r($array);
echo "</pre>";

?>
