<?php

session_start();
session_destroy();

echo'
<script>
    alert("Sesion cerrada");
    window.location = "index.php";
</script>
';