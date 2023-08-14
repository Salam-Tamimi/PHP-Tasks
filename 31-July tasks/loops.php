<?php

//task 1
for($i=1;$i<30;$i++){
    echo "$i ,";
}

echo "<br>";
echo "<br>";

//task 4
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($i == $j) {
            echo $i . " ";
        } else {
            echo "0" . " ";
        }
       
    } echo"<br>";
}

echo "<br>";


//task 6
$arr=[0,1];
for($i=1; $i <= 7; $i++) {
array_push($arr,$arr[count($arr)-1]+$arr[count($arr)-2]);
}
echo (implode( ",",$arr));
echo "<br>";
echo "<br>";

//task 9
$x = 1;
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $x . " ";
        $x++;
    }
    echo "<br>";
}