<?php
header('Content-Type: application/json');
include 'cds.php';
$author = $_GET['author'];
$res = [];
foreach ($cds as $cd) {
  if( $cd['author'] == $author) {
    $res[] = $cd;
  }
}

echo json_encode($res);
?>