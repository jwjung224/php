<?php

// finoacci number sequence
// recursion required
function fibo($num){
	if($num <= 1){
	    return $num;
	}
	else{
	    return fibo($num - 1) + fibo($num - 2);
	}
}

function swap(&$arr,$p1,$p2)
{
    $temp = $arr[$p2];
    $arr[$p2] = $arr[$p1];
    $arr[$p1] = $temp;
}

// bubble sort in PHP
function bubbleSort($arr){
	$count = count($arr);
	for($i = 1; $i < $count; $i++){
		$first = $arr[0];
	    for ($j = 1; $j < ($count - $i + 1); $j++){        
            if ($arr[$j-1] > $arr[$j])
            {
                swap($arr, $j-1, $j);
            } 
	    }
	}
	return $arr;
}
?>