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


    function blacklist($id)
    {
        $id= preg_replace('/[\/\*]/',"", $id);				//strip out /*
        $id= preg_replace('/[--]/',"", $id);				//Strip out --.
        $id= preg_replace('/[#]/',"", $id);					//Strip out #.
        $id= preg_replace('/[ +]/',"", $id);	    		//Strip out spaces.
//$id= preg_replace('/select/m',"", $id);	   		 	//Strip out spaces.
//        $id= preg_replace('/[ +]/',"", $id);	    		//Strip out spaces.
//        $id= preg_replace('/union\s+select/i',"", $id);	    //Strip out UNION & SELECT.
//        echo "waf!!!";
//        echo "<br>";
        return $id;
    }

    $servername = "127.0.0.1";
//    $username = "ctf";
//    $password = "qweasdzxczxcasdqwe";
    $username = "root";
    $password = "123456";
    $dbname = "info";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("连接数据库失败: " . $conn->connect_error);
    }

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $id= blacklist($id);
        $sql="SELECT * FROM users WHERE id=('$id') LIMIT 0,1";
//        echo $sql;
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);

        if ($row) {
//            echo '<br><span style="font-size: 20px; color: #f1c40f;">啊对对对</span><br>';
            echo "<font size='5' color= '#99FF00'>";
            echo 'Your Login name:'. $row['username'];
//            echo "<br>";
//            echo 'Your Password:' .$row['password'];
//            echo "</font>";
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
