<?php

$firstName = "Azmii";
$lastName = "Rohmatullah";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 === 0) {
        if ($i % 3 === 0 && $i % 5 === 0) {
            echo $firstName . " " . $lastName ."<br/>";
        } else {
            echo $firstName. "<br/>";
        }
    } elseif ($i % 5 === 0) {
        echo $lastName. "<br/>";
    } else {
        echo $i. "<br/>";
    }
}

?>