<?php
$countries = array(
    "India" => "New Delhi",
    "USA" => "Washington D.C.",
    "France" => "Paris",
    "Germany" => "Berlin"
);
$capital = "Berlin";
$country = array_search($capital,$countries);

if ($country){
    echo "$capital is capital of $country";
} else{
    echo "$capital not found";
}
?>