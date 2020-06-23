<?php

include "QuadraticEquation.php";

$quadratic = new QuadraticEquation(1, -4, 3);
//print_r($quadratic->getDiscriminant());

if ($quadratic->getDiscriminant() > 0) {
    echo "NO1: ".$quadratic->getRoot1();
    echo "NO2: ".$quadratic->getRoot2();
} else if ($quadratic->getDiscriminant() === 0) {
    echo "NO chung ".$quadratic->getRoot1();
} else {
    echo "The equation has no roots";
}

