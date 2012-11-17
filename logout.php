<?php
session_start();
if(!isset($_SESSION["Token"]) || $_SESSION["Token"] == "")
{
    header ('Location: login.php');
    exit();
}
else
{
session_destroy();
header ('Location: login.php');
exit();
}
?>
