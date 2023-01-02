<?php

include 'client.php';

$replay = [];
$url = $_GET['url'];

$myData = getData();

$myData = json_decode($json_data, true);

$numbers = $myData['num'];
$date = $myData['date'];

switch ($url){

    case "sum":

        if (count($numbers) <= 1) {
            $replay = ["report" => "Not enough numbers", "date" => $date];
            break;
        }

        foreach ($numbers as $number) {
            if (!is_numeric($number)) {
                $replay = ["report" => "Not a number"];
                break;
            } else {
                $replay = ["report" => "ok", "result" => array_sum($numbers), "date" => $date];
            }
        }
        break;

    case "sub":

        if( count($numbers) <= 1){
            $replay = ["report" => "Not enough numbers", "date" => $date];
            break;
        }
            
        foreach($numbers as $number){
            if (!is_numeric($number)) {
                $replay = ["report" => "Not a number", "date" => $date];
                break;
            }
            else{
                $sub = $numbers[0];
                for ($i = 1; $i < count($numbers); $i++){
                    $sub -= (float)$numbers[$i];
                }
                $replay = ["report" => "ok", "result" => $sub, "date" => $date];
                }
            }  
        break;
  
    case "mul":

     if( count($numbers) <= 1){
            $replay = ["report" => "Not enough numbers", "date" => $date];
            break;
        }
            
        foreach($numbers as $number){
            if (!is_numeric($number)) {
                $replay = ["report" => "Not a number", "date" => $date];
                break;
            }
            else{
                $mul = $numbers[0];
                for ($i = 1; $i < count($numbers); $i++){
                    $mul *= (float)$numbers[$i];
                }
                $replay = ["report" => "ok", "result" => $mul, "date" => $date];
            }  
        }
        break;

    case "div":

        if( count($numbers) <= 1){
            $replay = ["report" => "Not enough numbers", "date" => $date];
            break;
        }
                    
        foreach($numbers as $number){
            if (!is_numeric($number)) {
                $replay = ["report" => "Not a number", "date" => $date];
                break;
            }
            else{
                $mul = $numbers[0];
                for ($i = 1; $i < count($numbers); $i++){
                    $mul /= (float)$numbers[$i];
                    }
                    $replay = ["report" => "ok", "result" => $mul, "date" => $date];
            }  
        }
        break;

    case "pow":

        if( count($numbers) <= 1){
            $replay = ["report" => "Not enough numbers", "date" => $date];
            break;
        }
                    
        foreach($numbers as $number){
            if (!is_numeric($number)) {
                $replay = ["report" => "Not a number", "date" => $date];
                break;
            }
            else{
                $pow = $numbers[0];
                for ($i = 1; $i < count($numbers); $i++){
                    $pow **= (float)$numbers[$i];
                }
                $replay = ["report" => "ok", "result" => $pow, "date" => $date];
                }  
            }
        break;
    
    default:

        $replay = ["report" => "Not suported operation", "date" => $date];
}

echo json_encode($replay);

?>