<?php
session_start();
session_destroy();

header("Location: main-page/home.php");
exit();
?>