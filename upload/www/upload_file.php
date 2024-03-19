<?php
// 允许上传的图片后缀
$allowedExts = array("gif", "jpeg", "jpg", "png", "php");
$temp = explode(".", $_FILES["file"]["name"]);
echo $_FILES["file"]["size"];
$extension = end($temp);     // 获取文件后缀名

if ($_FILES["file"]["size"] < 204800 && in_array($extension, $allowedExts)) {
    $fileContent = file_get_contents($_FILES["file"]["tmp_name"]);

    if (strpos($fileContent, "php") !== false || strpos($fileContent, "post") !== false) {
        echo "<div style='background-color: #ffcccc; padding: 10px; border: 1px solid #ff0000;'>上传文件内容包含非法关键字</div>";
    } else {
        if ($_FILES["file"]["error"] > 0) {
            echo "<div style='background-color: #ccffcc; padding: 10px; border: 1px solid #00ff00;'>错误：: " . $_FILES["file"]["error"] . "</div>";
        } else {
            echo "<div style='background-color: #ccffcc; padding: 10px; border: 1px solid #00ff00;'>上传文件名: " . $_FILES["file"]["name"] . "</div>";
            echo "<div style='background-color: #ccffcc; padding: 10px; border: 1px solid #00ff00;'>文件类型: " . $_FILES["file"]["type"] . "</div>";
            echo "<div style='background-color: #ccffcc; padding: 10px; border: 1px solid #00ff00;'>文件大小: " . ($_FILES["file"]["size"] / 1024) . " kB</div>";
            echo "<div style='background-color: #ccffcc; padding: 10px; border: 1px solid #00ff00;'>文件临时存储的位置: " . $_FILES["file"]["tmp_name"] . "</div>";

            if (file_exists("upload/" . $_FILES["file"]["name"])) {
                echo "<div style='background-color: #ffcccc; padding: 10px; border: 1px solid #ff0000;'>" . $_FILES["file"]["name"] . " 文件已经存在。</div>";
            } else {
                move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
                echo "<div style='background-color: #ccffcc; padding: 10px; border: 1px solid #00ff00;'>文件存储在: upload/" . $_FILES["file"]["name"] . "</div>";
            }
        }
    }
} else {
    echo "<div style='background-color: #ffcccc; padding: 10px; border: 1px solid #ff0000;'>非法的文件格式</div>";
}
?>
