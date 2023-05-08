<?php 

// recupero contenuto data.json
$array = file_get_contents('./data.json'); //stringa

// converto la stringa in un array associativo
$phparray = json_decode($array, true);

if(isset($_POST['newToDo'])){
    $newToDo  = $_POST['newToDo'];
    array_push($phparray, ['text' => $newToDo]);
    file_put_contents('./data.json', json_encode($phparray));
}

// restituisco dati json
header ('Content-Type: application/json');
$result = json_encode($phparray);
echo $result;