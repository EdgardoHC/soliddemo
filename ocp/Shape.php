<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Shape
 *
 * @author jhenriquez
 */
// Shape.php
// Interfaz para formas geométricas
if (!class_exists('Shape')) {

    interface Shape {

        public function area();

        public function perimeter(); // Nuevo método para calcular el perímetro
    }

}

