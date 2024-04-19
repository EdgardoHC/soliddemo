<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of ShapeCalculator
 *
 * @author jhenriquez
 */
// ShapeCalculator.php

// Verificamos si la clase ShapeCalculator ya ha sido definida

    // Incluimos el archivo Shape.php que contiene la interfaz
    include_once 'Shape.php';

    // Definimos la clase ShapeCalculator
    class ShapeCalculator {
        public function calculateArea(Shape $shape) {
            return $shape->area();
        }

        // Método para calcular el perímetro
        public function calculatePerimeter(Shape $shape) {
            return $shape->perimeter();
        }
    }

