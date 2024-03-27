<?php
class r00t{
    public $username;
    public $file;
    public function __wakeup(){
        $this->username = "www";
    }
    public function __destruct(){
        if($this->username = "root"){
            include($this->file);
        }
    }
}
unserialize($_GET['code']); 