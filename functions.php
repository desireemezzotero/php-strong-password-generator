<?php 
      $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $simboli = '!@#$%^&*()-_=+[]{}|;:,.<>?/';
      $numeri = '0123456789';


      function random($length) {
        global $characters, $simboli, $numeri; 

        $all_characters = $characters . $simboli . $numeri;

        $password = '';
         for( $i = 1; $i <= $length; $i++){
          $password .= $all_characters[rand(0, strlen($all_characters) - 1)];
         }
        echo $password;
        return $password;
      }
    ?>