<?php

header('Content-Type: application/json');

include "cds.php";
$author = "Queen";
// $author = $_GET['name'];
$authors = [];
foreach ($cds as $cd) {
  if ($cd['author'] == $author) {
    $authors[] = $cd;
  }
}

echo json_encode($authors);