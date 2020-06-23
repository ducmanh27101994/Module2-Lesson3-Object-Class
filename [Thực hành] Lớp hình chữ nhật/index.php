<?php

include "rectangle.php";

$rectangle = new Rectangle(10,20);

echo $rectangle->getArea();
echo "<br/>";
echo $rectangle->getPerimeter();
echo "<br/>";
echo $rectangle->display();