<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
  
    </head>
    <body>
        <?php
//    ini_set('display_errors', 1);
//        ini_set('display_startup_errors', 1);
//        error_reporting(E_ALL);
//        // index.php

// Incluimos las clases necesarias
include_once './ocp/Rectangle.php';
include_once './ocp/Circle.php';
include_once './ocp/ShapeCalculator.php';

// Instanciamos las clases
$rectangle = new Rectangle(5, 4);
$circle = new Circle(3);

// Instanciamos el ShapeCalculator
$calculator = new ShapeCalculator();

// Utilizamos el ShapeCalculator para calcular el área y el perímetro de cada forma
echo "Área del rectángulo: " . $calculator->calculateArea($rectangle) . "<br>";
echo "Perímetro del rectángulo: " . $calculator->calculatePerimeter($rectangle) . "<br>";

echo "Área del círculo: " . $calculator->calculateArea($circle) . "<br>";
echo "Perímetro del círculo: " . $calculator->calculatePerimeter($circle) . "<br>";

        ?>
    </body>
</html>
