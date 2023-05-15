<?php
  session_start();

  echo "Dang xuat thanh cong ";
  session_destroy();
  header("Location: ../home.php");
?>