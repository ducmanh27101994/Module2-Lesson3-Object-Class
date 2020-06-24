<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
    Nhap so a:
    <input type="text" name="numberA"><br/>
    Nhap so b:
    <input type="text" name="numberB"><br/>
    Nhap so c:
    <input type="text" name="numberC"><br/>
    <button type="submit">Submit</button>

</form>

</body>
</html>

<?php

include "QuadraticEquation.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numberA = $_POST['numberA'];
    $numberB = $_POST['numberB'];
    $numberC = $_POST['numberC'];

    $quadratic = new QuadraticEquation($numberA, $numberB, $numberC);
//print_r($quadratic->getDiscriminant());

    if ($quadratic->getDiscriminant() > 0) {
        echo "NO1: " . $quadratic->getRoot1();
        echo "<br/>";
        echo "NO2: " . $quadratic->getRoot2();
    } else if ($quadratic->getDiscriminant() === 0) {
        echo "NO chung " . $quadratic->getRoot1();
    } else {
        echo "The equation has no roots";
    }

}