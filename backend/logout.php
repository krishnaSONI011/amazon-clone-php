<?php  
session_start();
// session_abort();
session_destroy();

header("Location:../index.php");
exit;
?>