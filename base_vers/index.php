<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
  <!-- Stampare a schermo una decina di dischi musicali
  (vedi screenshot) in due modi diversi:
  - Solo con l'utilizzo di PHP, che stampa
  direttamente i dischi in pagina: al caricamento
  della pagina ci saranno tutti i dischi. -->
  <?php
  include 'data.php';
  include 'helper.php';
  ?>
</head>

<body>
  <div class="container">
    <?php printCDs($cds); ?>
  </div>


</body>

</html>