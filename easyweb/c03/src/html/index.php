<?php
highlight_file(__FILE__);
if(preg_match("/^[1-9]+$/",$_GET['var1']) && preg_match("/^[A-Za-z]+$/",$_GET['var2']) && $_GET['var3'] == (int)((0.1+0.7)*10*12+4) ){
    echo "<p>give you a maigc</p >";
    $var3 = (int)($_GET['var1']+$_GET['var2']);
    $var3 = (int)$var3;
}
else{
    echo("<p>not allowed!1</p >");
    die();
}
if ($var3){
    echo("<p>not allowed!2</p >");
    die();
}
if (hash('md4',$_GET['passwd']) == $_GET['passwd']){
    if (preg_match('/h4cker/i',$_GET['id'])){
        echo("<p>not allowed!3</p >");
        die();
    }
}
if (urldecode($_GET['id']) == 'h4cker'){
    if ($_GET['num'] == 154926 || preg_match('/[a-z]| /i',$_GET['num']) || !strpos($_GET['num'], "0")){
        echo("<p>not allowed!4</p >");
        die();
    }
    if(intval($_GET['num'],0) == 154926){
        echo("<p>Access granted!</p >");
        require('./flag.php');
    }
    else{
        echo intval($_GET['num'],0);
    }
}
else{
    echo("<p>not allowed!</p >");
    die();
}

?>

<br><br>

Can you bypass my restrictions？