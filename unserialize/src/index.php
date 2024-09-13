<?php

header("Content-type:text/html;charset=utf-8");
error_reporting(0);
show_source("index.php");

class Jiangsir1{


        public $admin;
        public $passwd;
        private $jiangshao;

        public function __construct(){
            $this->admin ="user";
            $this->passwd = "123456";
        }

        public function __wakeup(){
            $this->passwd = sha1($this->passwd);
        }

        public function __destruct(){
            if($this->admin === "admin" && $this->passwd === "wllm"){
                eval($this->jiangshao);
                
            }else{
                echo $this->passwd;
                echo "No wake up";
            }
        }
    }

$jiangsir = $_GET['jiangsir'];
unserialize($jiangsir);

?>