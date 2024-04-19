<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Circle
 *
 * @author jhenriquez
 */
// Circle.php

// Incluimos el archivo Shape.php que contiene la interfaz y la clase base
include_once 'Shape.php';

// Clase para círculos
class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * pow($this->radius, 2);
    }

    // Implementación del método para calcular el perímetro
    public function perimeter() {
        return 2 * pi() * $this->radius;
    }
}
