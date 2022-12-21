<?php

// localhost/math-api/index.php/?operation=(operation)&number=(number),***

$replay = [];
$nums = explode(",",filter_input(INPUT_GET, "number"));

switch(filter_input(INPUT_GET,"operation")){
    case "sum":
        
        if( count($nums) <= 1){
            $replay = ["report" => "Not enough numbers"];
            break;
        }
        
        foreach($nums as $num){
            if (!is_numeric($num)) {
                $replay = ["report" => "Not a number"];
                break;
            }
            else{
                $replay = ["report" => "ok", "result" => array_sum($nums)];
            }
        }
        break;

    case "sub":

        if( count($nums) <= 1){
            $replay = ["report" => "Not enough numbers"];
            break;
        }
    
        foreach($nums as $num){
            if (!is_numeric($num)) {
                $replay = ["report" => "Not a number"];
                break;
            }
            else{
                $sub = $nums[0];
                for ($i = 1; $i < count($nums); $i++){
                    $sub -= (float)$nums[$i];
                }
                $replay = ["report" => "ok", "result" => $sub];
            }  
        }
        break;

    case "mul":

        if( count($nums) <= 1){
            $replay = ["report" => "Not enough numbers"];
            break;
        }
        
        foreach($nums as $num){
            if (!is_numeric($num)) {
                $replay = ["report" => "Not a number"];
                break;
            }
            else{
                $mul = $nums[0];
                for ($i = 1; $i < count($nums); $i++){
                    $mul *= (float)$nums[$i];
                }
                $replay = ["report" => "ok", "result" => $mul];
            }  
        }
        break;

    case "div":

        if( count($nums) <= 1){
            $replay = ["report" => "Not enough numbers"];
            break;
        }
        
        foreach($nums as $num){
            if (!is_numeric($num)) {
                $replay = ["report" => "Not a number"];
                break;
            }
            else{
                $mul = $nums[0];
                for ($i = 1; $i < count($nums); $i++){
                    $mul *= (float)$nums[$i];
                }
                $replay = ["report" => "ok", "result" => $mul];
            }  
        }
        break;

    case "pow":

        if( count($nums) <= 1){
            $replay = ["report" => "Not enough numbers"];
            break;
        }
        
        foreach($nums as $num){
            if (!is_numeric($num)) {
                $replay = ["report" => "Not a number"];
                break;
            }
            else{
                $pow = $nums[0];
                for ($i = 1; $i < count($nums); $i++){
                    $pow **= (float)$nums[$i];
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