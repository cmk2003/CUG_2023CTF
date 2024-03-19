<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>sql by time</title>
<style>
body {
    background-color: #333;
    font-family: Arial, sans-serif;
}

.container {
    color: #fff;
    font-size: 23px;
    text-align: center;
    border: solid 2px #3498db;
    width: 30%;
    margin: 200px auto;
    padding: 20px;
    background-color: #2c3e50;
}

.error {
    color: #e74c3c;
    font-weight: bold;
}

.message {
    color: #f1c40f;
    font-size: 16px;
}

.image-container {
    text-align: center;
    margin-top: 20px;
}

h1 {
    color: #3498db;
}
</style>
</head>
<body>
<div class="container">
    <h1>Hello&nbsp;&nbsp;&nbsp;<span style="color: #FF0000;">bro</span></h1>
    <span class="message">
    <?php
    error_reporting(0);

    $servername = "127.0.0.1";
    $username = "ctf";
    $password = "qweasdzxczxcasdqwe";
    $dbname = "info";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("连接数据库失败: " . $conn->connect_error);
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        if (preg_match("/regexp|substr|file|into|load|updatexml|infor|\s+|right|left|insert|reverse|update/i", $id)) {
            echo "<p class='error'>waf!!!</p>";
            exit;
        }

        $id = '"' . $id . '"';
        $sql = "SELECT * FROM users WHERE id=$id LIMIT 0,1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);

        if ($row) {
            echo '<br><span style="font-size: 20px; color: #f1c40f;">啊对对对</span><br>';
        } else {
            echo '<br><span style="font-size: 20px; color: #f1c40f;">啊对对对</span><br>';
        }
    } else {
        echo "try try id";
    }
    ?>
    </span>
</div>
</body>
</html>
