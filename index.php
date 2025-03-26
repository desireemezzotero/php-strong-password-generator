<?php
require_once './functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Password Generator</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body class="bg-primary-subtle mt-2">
  <header>
    <h1 class="text-center text-primary"> Strong Password Generator</h1>
  </header>

  <main>
    <div class="container mx-auto">
      <h5 class="text-center">Genera una password</h5>

     <section class="border-1 bg-light p-4">
       <form action="">

        <div>
          <label for="" class="mr-4">Lunghezza password</label>
          <input type="number" name="length" max="20" min="4">  
        </div>

       
        <div>
          <label for="">Consenti ripetizioni di uno o più caratteri:</label>
          <input type="radio" name="yes"> si
          <input type="radio" name="yes"> no
        </div>

        <input type="checkbox" name="numeri"> numeri
        <input type="checkbox" name="lettere"> lettere
        <input type="checkbox" name="simboli"> simboli
       </form>
     </section>

   <?php 
   if(isset($_GET['length'])) {
    $length_password = $_GET['length'];
     random($length_password);
   }?>

   
    </div>
  </main>
  
</body>

</html>