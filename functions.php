<?php 
session_start();
    
      $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $simboli = '!@#$%^&*()-_=+[]{}|;:,.<>?/';
      $numeri = '0123456789';

      function random($length,  $number, $letter, $symbol, $repeat ) {
        global $characters, $simboli, $numeri; 

        $all_characters = '';

        if(isset($number) && $number == "on"){
          $all_characters .= $numeri;
        }

        if(isset($symbol) && $symbol == "on") {
          $all_characters .=  $simboli;
        }

        if(isset($letter) && $letter == "on"){
          $all_characters .= $characters ;
        }

        $password = '';
        $final_characters = '';
        
        for ($i = 1; $i <= $length; $i++) {
          if ($repeat == "no") {
              // Se non sono consentite ripetizioni, generiamo un carattere unico
              do {
                  $random_char = $all_characters[rand(0, strlen($all_characters) - 1)];
              } while (strpos($final_characters, $random_char) !== false);  // Controlla se il carattere è già stato usato
  
              $password .= $random_char;  // Aggiungi il carattere alla password
              $final_characters .= $random_char;  // Memorizza il carattere usato
          } else {
              // Se sono consentite ripetizioni, aggiungi semplicemente un carattere casuale
              $password .= $all_characters[rand(0, strlen($all_characters) - 1)];
          }
      }  

        return $password;
      }

    
    ?>