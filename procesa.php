<?php

$valor = $_POST['dato'];
 // recibir el dato del navegador por metodo POST

if($valor=='1')
{
    exec('sudo python /var/www/voz/prende.py');
    $retorna=1;
}
else
{
    exec('sudo python /var/www/voz/apaga.py');
    $retorna=2;
}

echo $retorna;
?>
