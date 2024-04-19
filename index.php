<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="js/srp.js" type="text/javascript"></script>
    </head>
    <body>
        <h1>Principio de Responsabilidad Única (SRP):</h1>
      <?php
      require './srp/EmailSender.php';
      require './srp/UserAuthentication.php';
      $oAuth = new UserAuthentication();
      $oEmail = new EmailSender();
      
      $valid = $oAuth->authenticate('edgardo', 'passwSecret11');
      
      if($oAuth){
         echo  $oEmail->sendEmail('jhenriquez@itca.edu.sv', 'Hola', 'Este es un mensaje');
      }
      ?>
    </body>
</html>
