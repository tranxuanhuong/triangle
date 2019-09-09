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

    <input type="number" name="side1" placeholder="Nhap canh thu nhat" /><br>
    <input type="number" name="side2" placeholder="Nhap canh thu 2"/><br>
    <input type="number" name="side3" placeholder="Nhap canh thu 3"/><br>
    <input type="text" name="color" placeholder="Nhap mau sac"/><br>
    <input type="submit" name="submit" id="submit" value="Tinh"/><br>

</form>
</body>
</html>

<?php
include_once "Shape.php";
include_once "Triangle.php";
?>

<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){

    $side1=$_POST["side1"];
    $side2=$_POST["side2"];
    $side3=$_POST["side3"];
    $color=$_POST["color"];

    $shape=new Shape($color);

    $triangle=new Triangle($color,$side1,$side2,$side3);


    $triangle->getArea();
    $triangle->getPerimeter();
    $triangle->toString();


}

?>


