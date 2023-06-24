<?php

session_start();

session_unset();
session_destroy();

header("location: /AgroBDc/Agro-Bd-1/index.php");
exit;

?>