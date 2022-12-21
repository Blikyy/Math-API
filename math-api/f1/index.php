<?php

$pepa = 0;
$replay = [];
$nums = explode(",",filter_input(INPUT_GET, "num"));
switch(filter_input(INPUT_GET,"operation")){
    case "sum";
    case "add";
        if(count($num) <= 1){
            $replay = ["report" => "Not enough numbers"];
            break;
        }
        if(!is_numeric(implode($nums))){
            $replay = ["report" => "Not number"];
            break;
        }
        else{
            foreach($nums as $num){
                $num = $nums;
            }
            $pepa = $num;
            $replay = ["report" => "ok", "result" => $pepa];
        }
        
}
echo json_encode($replay);

?>