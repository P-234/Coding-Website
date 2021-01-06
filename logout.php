<?php

session_start();
session_reset();
session_destroy();

// unset($_SESSION['un']);

header("Location:login.php");





?>