<?php 

// recupero contenuto data.json
$array = file_get_contents('./data.json'); //stringa

// converto la stringa in un array associativo
$phparray = json_decode($array, true);

if(isset($_POST['newToDo'])){
    $newToDo  =  [ 
        "text" => $_POST['newToDo'],
        "done" => false
    ];
    array_push($phparray, $newToDo);
    file_put_contents('./data.json', json_encode($phparray));
    
} elseif (isset($_POST['updateItem']))  {
    $index = $_POST['updateItem'];
    $phparray[$index]['done'] = !$phparray[$index]['done'];
    file_put_contents('./data.json', json_encode($phparray));
    
}

// restituisco dati json
header ('Content-Type: application/json');
$result = json_encode($phparray);
echo $result;