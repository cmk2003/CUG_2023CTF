<!DOCTYPE html>
<?php
highlight_file(__FILE__);
// hint.php
$a = $_GET['a_demo'];
if (preg_match("/a_demo/i", $_SERVER["QUERY_STRING"])) {
    die("don't use include");
}
if (preg_match("/convert|base64|input|data|compress|(^\.)|(^\/)/i", $a)) {
    die("hacker!");
}

include $a;

?>