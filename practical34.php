<?php
$fruits = array(
    "Apple" => 120,
    "Banana" => 50,
    "Mango" => 100,
    "Orange" => 70
);
echo "Sorted by values:<br>";
asort($fruits);
print_r($fruits);

echo "<br><br>Sorted by key:<br>";
ksort($fruits);
print_r($fruits);
?>