<?php
session_start();

session_unset(); //return TRUE on success & FALSE on failure     //frees all the session variable currently registered
session_destroy();    //session destroy

header("location: login.php");
exit;
?>
