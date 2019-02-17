<?php
$bmw["model"] = "X5";
$bmw["speed"] = "120";
$bmw["doors"] = "5";
$bmw["year"] = "2015";
$toyota["model"] = "Camry";
$toyota["speed"] = "160";
$toyota["doors"] = "5";
$toyota["year"] = "2018";
$opel["model"] = "Corsa";
$opel["speed"] = "200";
$opel["doors"] = "3";
$opel["year"] = "2019";
$cars["bmw"] = $bmw;
$cars["toyota"] = $toyota;
$cars["opel"] = $opel;
foreach ($cars as $key => $value) {
    echo "CAR $key<br/>" . implode(" ", $value) . "<br/>";
}
