<?php



require __DIR__ . '/../vendor/autoload.php';  
    $dotenv =  Dotenv\Dotenv::createImmutable(__DIR__.'/../');
    $dotenv->load();

    //this file contains the database settings for the application
    //it detects if the application is running locally or on a remote server
    //the correct database settings are set
    //this file needs to be included in all the files that connect to the database
    //check if script is running locally
    //if($_SERVER["SERVER_NAME"] == "localhost" || $_SERVER["SERVER_ADDR"] == "127.0.0.1")
    //{
            //website is running unser locahost - use local DB details
            // $dsn =$_ENV['S_NAME'];
            // $username = $_ENV['USER_NAME'];
            // $password = $_ENV['_PASSWORD'];
           
    //}else{
            //website is running on the remote server
                $dsn =$_ENV['S_NAME'];
                $username = $_ENV['USER_NAME'];
                $password = $_ENV['_PASSWORD'];
                //echo '<pre>';
                //var_dump($_SERVER['S_NAME']);
    //}
?>