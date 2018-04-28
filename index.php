<?php  
    //单入口文件  
    define('THINK_PATH','./ThinkPHP/');   
    define('APP_NAME','home');
    define('APP_PATH','./home/'); 
	require_once THINK_PATH.'ThinkPHP.php';
     App::run();
?>  