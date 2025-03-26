
     <?php 
       session_start();
      ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body class="bg-primary-subtle mt-2">
  <header>
    <h1 class="text-center text-primary"> Strong Password Generator</h1>
  </header>

  <main>
    <div class="container mx-auto">
      <h5 class="text-center">Ecco la tua password generata</h5>
      <?php 
        if (isset($_SESSION['password'])) {
            echo "<h3 class='text-center mt-3'>" . $_SESSION['password'] . "</h3>";
        }
      ?>
    </div>
  </main>
  
</body>
</html>


