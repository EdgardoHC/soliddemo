<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

/**
 *
 * @author jhenriquez
 */
// Rectangle.php

// Incluimos el archivo Shape.php que contiene la interfaz y la clase base
include_once 'Shape.php';

// Clase para rectángulos
class Rectangle implements Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() {
        return $this->width * $this->height;
    }

    // Implementación del método para calcular el perímetro
    public function perimeter() {
        return 2 * ($this->width + $this->height);
    }
}

