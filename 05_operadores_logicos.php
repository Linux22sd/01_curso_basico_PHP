<?php
echo 'Tablas de la verdad'.'<br><br>';
echo '==== AND / && ===='.'<br><br>';

echo 'El operador AND SI NO ESTA ENTRE PARENTESIS regresara el valor buleano de la varaible mas cercana'.'<br>';
echo 'por motivos de precedecia y se comportara como la siguiente tabla'.'<br><br>';

echo 'TRUE AND TRUE =  TRUE'. '<br>';
echo 'TRUE AND FALSE =  TRUE'. '<br>';
echo 'FALSE AND TRUE =  FALSE '. '<br>';
echo 'FALSE AND FALSE =  FALSE '. '<br><br>';

echo 'Si se usa el operador && O SE USA AND PERO DENTRO DE PARENTESIS se comportaran como la siguiente tabla'.'<br><br>';

echo 'TRUE && TRUE =  TRUE'. '<br>';
echo 'TRUE && FALSE =  FALSE'. '<br>';
echo 'FALSE && TRUE =  FALSE'. '<br>';
echo 'FALSE && FALSE =  FALSE'. '<br><br>';

echo 'Entonces :'.'<br><br>';

echo 'TRUE and FALSE Sera Igual  TRUE  // Porque and sigue la precedencia'.'<br>';
echo '(TRUE and FALSE) Sera Igual  FALSE   // Porque esta entre parentesis como un solo proceso'.'<br>';
echo 'TRUE && FALSE Sera Igual  FALSE   // Porque el operador && no es afectado con la precedencia'.'<br><br>';

echo 'De igual forma funciona con el OR que sigue precedencia y el || que no lo hace recordando que con los parentesis'.'<br>';
echo 'se soluciona la precedencia de OR'.'<br><br>';

echo '==== OR / || ===='.'<br><br>';

echo 'TRUE OR TRUE =  TRUE'. '<br>';
echo 'TRUE OR FALSE =  TRUE '. '<br>';
echo 'FALSE OR TRUE =  FALSE'. '<br>';
echo 'FALSE OR FALSE =  FALSE '. '<br><br>';

echo 'TRUE || TRUE =  TRUE'. '<br>';
echo 'TRUE || FALSE =  TRUE'. '<br>';
echo 'FALSE || TRUE =  TRUE'. '<br>';
echo 'FALSE || FALSE =  FALSE'. '<br><br>';

echo '======== Ejemplo AND / && ========'. '<br><br>';

$boleto1 = true;
$boleto2 = true;
$viaje = false;

echo '$boleto1 = false;'. '<br>';
echo '$boleto2 = true;'. '<br>';
echo '$viaje = true;'. '<br><br>';

echo '== Cuando usamos AND =='.'<br><br>';

echo '$value = $boleto1 AND $viaje;'.'<br>';
echo 'if( $value ){'. '<br>';
echo '--echo " buen viaje ";'. '<br>';
echo '} else {'. '<br>';;
echo '-- echo " voleto no valido ";'. '<br>';
echo '}'. '<br><br>';

$value = $boleto1 AND $viaje;
if($value){
    echo "buen viaje". '<br><br>';
}else{
    echo "voleto no valido". '<br><br>';
}

echo '== Cuando usamos && =='.'<br><br>';

echo '$value2 = $boleto1 && $viaje;'.'<br>';
echo 'if( $value2{'. '<br>';
echo '--echo " buen viaje ";'. '<br>';
echo '} else {'. '<br>';;
echo '-- echo " voleto no valido ";'. '<br>';
echo '}'. '<br><br>';

$value2 = $boleto1 && $viaje;
if( $value2 ){
    echo "buen viaje". '<br><br>';
}else{
    echo "voleto no valido". '<br><br>';
}

echo '======== Ejemplo OR / || ========'. '<br><br>';


echo '== Cuando usamos OR =='.'<br><br>';

echo '$value3 = $viaje OR $boleto1;'.'<br>';
echo 'if($value3 ){'. '<br>';
echo '--echo " buen viaje ";'. '<br>';
echo '} else {'. '<br>';;
echo '-- echo " voleto no valido ";'. '<br>';
echo '}'. '<br><br>';

$value3 = $viaje or $boleto1;
if($value3){
    echo "buen viaje". '<br><br>';
}else{
    echo "voleto no valido". '<br><br>';
}

echo '== Cuando usamos "||" =='.'<br><br>';

ECHO '$value4 =  $viaje || $boleto1;','<br>';
echo 'if( $value4){'. '<br>';
echo '--echo " buen viaje ";'. '<br>';
echo '} else {'. '<br>';;
echo '-- echo " voleto no valido ";'. '<br>';
echo '}'. '<br><br>';

$value4 =  $viaje || $boleto1;
if($value4 ){
    echo "buen viaje". '<br><br>';
}else{
    echo "voleto no valido". '<br><br>';
}
?>