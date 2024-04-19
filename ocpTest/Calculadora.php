<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

class Calculadora {
    public function sumar($a, $b) {
        return $a + $b;
    }

    public function restar($a, $b) {
        return $a - $b;
    }

    // Función mal implementada que viola el principio abierto/cerrado
    public function calcularArea($forma, $dimensiones) {
        switch ($forma) {
            case 'cuadrado':
                return $dimensiones * $dimensiones;
            case 'circulo':
                return pi() * ($dimensiones ** 2);
            // Aquí se podrían añadir más formas geométricas
            default:
                return 0;
        }
    }
}

$calculadora = new Calculadora();
echo $calculadora->calcularArea('cuadrado', 5); // Imprimirá el área de un cuadrado con lado 5
