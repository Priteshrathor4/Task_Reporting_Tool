<?php

session_start();
session_unset();
session_destroy();

echo "Your session have been destroy!! ";
header("Location:index.php");
?>