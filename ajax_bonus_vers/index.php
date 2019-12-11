<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
  <!-- FONT: FONTAWESOME -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <!-- JS: JQUERY -->
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- JS: MOMENT -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>
  <!-- JS: CHART-JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
  <!-- JS: HANDLEBARS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
  <!-- TEMPLATE: MESSAGE MENU -->
  <!-- CSS: MY STYLE -->
  <link rel="stylesheet" href="style.css">
  <!-- JS: MY SCRIPT -->
  <script src="script.js" charset="utf-8"></script>
  <title>Document</title>
  <!-- Stampare a schermo una decina di dischi musicali
  (vedi screenshot) in due modi diversi:
  - Attraverso l'utilizzo di AJAX: al caricamento 
  della pagina ajax chiederà attraverso una 
  chiamata i dischi a php e li stamperà 
  attraverso handlebars.
  Utilizzare: Html, Sass, JS, jQuery, handlebars, Php
  Opzionale: 
  - Attraverso un'altra chiamata ajax, filtrare gli 
  album per artista
  -->

</head>

<body>

  <div class="container">

  </div>

  <script id="cd-template" type="text/x-handlebars-template">
    <div class="card">
      <div class="cd">
      <p><img src="{{poster}}" alt="cd_img"></p>
      <p>{{title}}</p>
      <p>{{author}}</p>
      <p>{{genre}}</p>
      <p>{{year}}</p>    
      </div>
    </div>
  </script>

  <!-- <pre>
  <?php
  // include "php/cds.php";
  // $author = "Queen";
  // $authors = [];
  // foreach ($cds as $cd) {
  //   if ($cd['author'] == $author) {
  //     $authors[] = $cd;
  //     $singleAuthor = $cd;
  //   }
  // }
  // print_r($singleAuthor);
  ?>
  </pre> -->
</body>

</html>