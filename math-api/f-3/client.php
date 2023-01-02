<?php
  
$data = array(
    'num' => [2,2],
    'date' => date("Y-m-d H:i:s")
);

function getData(){

    global $data;
    return $data;
}

$json_data = json_encode($data);

?>