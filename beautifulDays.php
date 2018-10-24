<?php

// Complete the beautifulDays function below.
function beautifulDays($i, $j, $k) {
    $counter=0;
    while($i<=$j){
        $temp =$i;
        $reverseNum = 0;
        while($temp!=0){
            $reverseNum = $reverseNum*10;
            $reverseNum = $reverseNum+($temp%10);
            $temp = intval($temp/10);
        }
        
        $res = ($reverseNum-$i);
        if($res%$k==0){
            $counter++;
        }
        
        $i++;
    }
    return $counter; 

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%[^\n]", $ijk_temp);
$ijk = explode(' ', $ijk_temp);

$i = intval($ijk[0]);

$j = intval($ijk[1]);

$k = intval($ijk[2]);

$result = beautifulDays($i, $j, $k);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);
