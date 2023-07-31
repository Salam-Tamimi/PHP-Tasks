<?php

//task 1
for($i=1;$i<30;$i++){
    echo "$i ,";
}

echo "<br>";

//task 4
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($i == $j) {
            echo $i;
        } else {
            echo "0";
        }
       
    } echo"<br>";
}

echo "<br>";

//task 5
for ($i = 1; $i < 9; $i++) {
    for ($j = 1; $j < 9; $j++) {
        if ($i = 1) {
            echo $i;
        } elseif($i = 2) {
            echo $i * ($i-1);
        }
    }
}
