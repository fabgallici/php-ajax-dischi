<?php
function printCDs($cds) {
  foreach ($cds as $cd) {
  ?><div class="card">
      <div class="cd">
        <p><img src="<?php echo $cd['poster'] ?>"></img></p>
        <p><?php echo $cd['title'] ?></p>
        <p><?php echo $cd['author'] ?></p>
        <p><?php echo $cd['genre'] ?></p>
        <p><?php echo $cd['year'] ?></p>
      </div>
    </div> <?php
  }
}
?>

