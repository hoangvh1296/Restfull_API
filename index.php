<?php
require_once './config/db.php';
define('APP_PATH',str_replace('index.php','',$_SERVER['SCRIPT_FILENAME']));
$pth_ifo = [];
if(isset($_SERVER['PATH_INFO'])) $pth_ifo = explode('/',$_SERVER['PATH_INFO']);
if(file_exists(APP_PATH.'api/'.$pth_ifo[1].'.php') && file_exists(APP_PATH.'views/'.$pth_ifo[2].'.php')){
    require_once './api/'.$pth_ifo[1].'.php';
    $controler = new $pth_ifo[1];
}
else{
    require_once './views/error.php';
}