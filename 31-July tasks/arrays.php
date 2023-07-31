<?php

//task 1
$colors = array('white', 'green', 'red');
echo <<< "ulist"
<ul>
<li>$colors[0]</li>
<li>$colors[1]</li>
<li>$colors[2]</li>
</ul>
ulist;

echo "<br>";

//task 2
$cities= array( 
    "Italy"=>"Rome", 
    "Luxembourg"=>"Luxembourg", 
    "Belgium"=> "Brussels", 
    "Denmark"=>"Copenhagen", 
    "Finland"=>"Helsinki", 
    "France" => "Paris", 
    "Slovakia"=>"Bratislava", 
    "Slovenia"=>"Ljubljana", 
    "Germany" => "Berlin", 
    "Greece" => "Athens", 
    "Ireland"=>"Dublin", 
    "Netherlands"=>"Amsterdam", 
    "Portugal"=>"Lisbon", 
    "Spain"=>"Madrid" 
); 
asort($cities);
foreach ($cities as $country => $capital) {
    echo "The capital of $country is $capital<br>";
}

echo "<br>";

//task 3
$color = array (
    4 => 'white', 
    6 => 'green', 
    11=> 'red'
); 
echo $color["4"];

echo "<br>";

//task 4
$fruits = array(
    "d" => "lemon", 
    "a" => "orange", 
    "b" => "banana", 
    "c" => "apple"
);

foreach ($fruits as $key => $value) {
    echo "$key = $value<br>";
}
