<?php

require_once("classes/ConnectDatabase.php");
$title='categories page';
$pageHeading = "";  

//get database settings
include "settings/db.php";

//create databse object
$db = new ConnectDatabase($dsn,$username,$password);

            //connect to database
            $pdo = $db->Connect();
            
            //retrieve category name
            $sql_query="select * from categories";
            $query = $pdo->prepare($sql_query);
           
            //execute sql
            $category_rows = $db->ExecuteSQL($query);

    $pdo = null;
?>