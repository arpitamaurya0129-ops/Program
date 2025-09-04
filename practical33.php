<?php
$students = array(
    "Aman" => 80,
    "Ravi" => 90,
    "Sita" => 78
);
if(array_key_exists("Ravi", $students))
{
    echo "key 'Ravi' exists in array.";
}else{
    echo "key 'Ravi' does not exist.";
}
?>