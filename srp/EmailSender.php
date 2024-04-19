<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of EmailSender
 *
 * @author jhenriquez
 */
class EmailSender {
     public function sendEmail($to, $subject, $message) {
        // Lógica para enviar el correo electrónico
        echo "Correo electrónico enviado a: $to<br>";
        echo "Asunto: $subject<br>";
        echo "Mensaje: $message<br>";
    }
}
