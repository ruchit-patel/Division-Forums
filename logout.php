<?php
session_start();
echo "Hello ";
echo $_SESSION['uname'];
echo "<br> Session destroyed! Good Bye!";
echo "Login again to continue.";
session_destroy();
 ?>
