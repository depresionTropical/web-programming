<div class="title-user">
  <p><?php echo $titleUser; ?>
  </p>
  <hr>
  <?php
  if ($titleUser == 'VER USUARIOS' || $titleUser == 'ALTA USUARIOS') {
    echo '<a class="btn-gray" href="../panel/user.php"><< REGRESAR</a>';
  }
  if ($titleUser == 'VER CURSOS' || $titleUser == 'ALTA CURSOS') {
    echo '<a class="btn-gray" href="../panel/course.php"><< REGRESAR</a>';
  }
  ?>
</div>