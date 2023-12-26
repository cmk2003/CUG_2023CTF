<!DOCTYPE html>
<?php
highlight_file(__FILE__);
@$_str = $_POST['str'];
$find = array("eval", "system", "passthru", "[", "]", "{", "`", "^", "~", " ", "assert", "+", "exec");
if (strlen($_str) >= 18) {
    die("不要太贪心");
}
$_str = str_replace($find,"h@ck_er",$_str);
@eval(addslashes($_str));

?>