<?php

// localhost/f-2/operator/num/***

function get_numbers($string){

    unset($string[0]);
    $string = array_values($string);

    return $string;  

}

$replay = [];
$link = $_GET['url'];

$string = explode("/", $link);

$num = get_numbers($string);

switch($string[0]){

    case "sum":

        if( count($num) <= 1){
            $replay = ["report" => "Not enough numbers"];
            break;
        }
        
        foreach($num as $number){
            if (!is_numeric($number)) {
                $replay = ["report" => "Not a number"];
                break;
            }
            else{
                $replay = ["report" => "ok", "result" => array_sum($num)];
            }
        }
        break;

    case "sub":

        if( count($num) <= 1){
            $replay = ["report" => "Not enough numbers"];
            break;
        }
        
        foreach($num as $number){
            if (!is_numeric($number)) {
                $replay = ["report" => "Not a number"];
                break;
            }
            else{
                $sub = $num[0];
                for ($i = 1; $i < count($num); $i++){
                    $sub -= (float)$num[$i];
                }
                $replay = ["report" => "ok", "result" => $sub];
                }
            }  
        break;

    case "mul":

        if( count($num) <= 1){
            $replay = ["report" => "Not enough numbers"];
            break;
        }
                
        foreach($num as $number){
            if (!is_numeric($number)) {
                $replay = ["report" => "Not a number"];
                break;
            }
            else{
                $mul = $num[0];
                for ($i = 1; $i < count($num); $i++){
                    $mul *= (float)$num[$i];
                }
                $replay = ["report" => "ok", "result" => $mul];
            }  
        }
        break;

    case "div":

        if( count($num) <= 1){
            $replay = ["report" => "Not enough numbers"];
            break;
        }
                    
        foreach($num as $number){
            if (!is_numeric($number)) {
                $replay = ["report" => "Not a number"];
                break;
            }
            else{
                $mul = $num[0];
                for ($i = 1; $i < count($num); $i++){
                    $mul /= (float)$num[$i];
                    }
                    $replay = ["report" => "ok", "result" => $mul];
            }  
        }
        break;

    case "pow":

        if( count($num) <= 1){
            $replay = ["report" => "Not enough numbers"];
            break;
        }
                    
        foreach($num as $number){
            if (!is_numeric($number)) {
                $replay = ["report" => "Not a number"];
                break;
            }
            else{
                $pow = $num[0];
                for ($i = 1; $i < count($num); $i++){
                    $pow **= (float)$num[$i];
                }
                $replay = ["report" => "ok", "result" => $pow];
                }  
            }
            break;
            
    default:
            
    $replay = ["report" => "Not suported operation"];

}
echo json_encode($replay);
?>