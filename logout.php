<?php
session_start();
echo $_SESSION['role'];
echo "<br> Session destroyed! Good Bye!";
session_destroy();
 ?>
