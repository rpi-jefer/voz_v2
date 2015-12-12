<?php

$valor = $_POST['dato'];
 // recibir el dato del navegador por metodo POST

if($valor=='1')
{
    exec('sudo python prende.py');
    $retorna=1;
}
else
{
    exec('sudo python apaga.py');
    $retorna=2;
}

echo $retorna;
?>
