<?php 

// recupero contenuto data.json
$array = file_get_contents('./data.json'); #stringa

// converto la stringa in un array associativo
$phparray = json_decode($array, true);

// restituisco dati json
header ('Content-Type: application/json');
$result = json_encode($phparray);
echo $result;