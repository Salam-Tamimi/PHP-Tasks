<?php

//task 1
$year = 2013;
if($year % 4 == 0){
    echo "$year is a leap year";
}else {
    echo "This year is not a leap year";
}

 echo "<br>";

//task2
$temp =27;
if($temp < 20) {
    echo "It is wintertime!";
}else{
    echo "It is summertime!";
}

echo "<br>";

//task 3

$firstint = 2;
$secondint =2;
$result = ( $firstint+ $secondint ) *3;
if($firstint === $secondint) {
    echo $result;
}

echo "<br>";

//task 4

$firstnum = 10;
$secondnum = 12;
if($firstnum === $secondnum) {
    echo $firstnum + $secondnum;
}else {
    echo "false";
}

echo "<br>";

//task 5
$num = 20;
if ($num > 0 && $num % 3 == 0){
    echo "True";
}else{
    echo "False";
}

echo "<br>";

//task 6 
$int = 30;
if ($int >= 20 && $int <=50 ){
    echo "True";
}

echo "<br>";

//task 7
$arr = [1,5,9];
echo max($arr);

echo "<br>";

//task 8
$units = 150;
$bill = 100;
if($units <= 50){
    echo $bill = $units * 2.5;
}else if ($units >50 && $units <=150){
    echo $bill = 50*2.5 + ($units-50) * 5;
}else if ($units >150 && $units <=250){
    echo $bill = 50*2.5 + 150 * 5 + ($units-150) * 6.2;
}else{
    echo $bill = 50*2.5 + 150 * 5 + ($units-150) * 6.2 + ($units-250) * 7.5;
}

echo "<br>";

//task 9
$age = 15;
if ($age < 18){
    echo "Not available to vote";
}

echo "<br>";

//task 10
$number = -60;
if($number > 0){
    echo "positive";
}else if($number < 0){
    echo "negative";
}else{
    echo "zero";
}

echo "<br>";

//task 11
$x = 2;
$y = 4;
$sign = "+";
switch(true){
    case ($sign ="+"):
        echo $x + $y;
        break;
    case ($sign ="-"):
        echo $x - $y;
        break;
    case ($sign ="*"):
        echo $x * $y;
        break;
    case ($sign ="/"):
        echo $x / $y;
        break;
}


echo "<br>";

//task 12
$scores= [60,86,95,63,55,74,79,62,50];
$avg = array_sum($scores)/count($scores);
echo $avg;
$grade=[60,86,95,63,55,74,79,62,50];
$sumarr=array_sum($grade);
$avg= $sumarr/count($grade);
switch($avg){
    case $avg<=100 && $avg >=90:
        echo "A";
        break;
    case $avg<90 && $avg >=80:
       echo "B";
       break;
    case $avg<80 && $avg >=70:
       echo "C";
       break;
    case $avg<70 && $avg >=60:
       echo "D";
       break;
    case $avg<60:
        echo "F";
        break;
}

