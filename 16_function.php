<?php

function processMarks($marksArr){
    $sum=0;
    foreach($marksArr as $value){
        $sum+=$value;
    }
    return $sum;
}

function averageMarks($marksArr){
    $sum=0;
    foreach($marksArr as $value){
        $sum+=$value;
    }
    return ($sum/5);
}

$aman=[77,87,93,82,76];
$finalMarks=processMarks($aman);
echo "Marks Scored out of 500: ".$finalMarks."<br>";
echo "Percentage: ".($finalMarks/5)."<br>";
echo "Average: ".(averageMarks($aman))."<br>";

?>