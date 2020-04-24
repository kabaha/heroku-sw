<?php

require_once("classes/ConnectDatabase.php");
$title='Search Page';
$pageHeading = "";  

//get database settings
include "settings/db.php";

//create databse object
$db = new ConnectDatabase($dsn,$username,$password);


    //check if there is a query string field id
    if (isset($_GET["category"]))
     {
         //for test debug
         //print_r($_GET["category"]);

            //connect to database
            $pdo = $db->Connect();

            //retrieve Items name
            $sql_query="select CategoryID from categories where CategoryName = :category";
            $query = $pdo->prepare($sql_query);
            $query->bindValue(":category", $_GET["category"]);
            $rows = $db->ExecuteSQL($query);


            $id_arr=array_column($rows,0);
            $id=$id_arr[0];
                    //print_r($id);
                    //var_dump($id);

            //set up sql query
            //retrieve Items name
            //$sql_query2="select * from Items where CategoryID = :$id"; /* localhost */
            $sql_query2="select * from items where CategoryID = :$id";
            $query2 = $pdo->prepare($sql_query2);
            $query2->bindValue(":$id", $id);

            //execute sql
            //notes:the good thinks to make name rows as categorys more easy to understand
            $rows_result = $db->ExecuteSQL($query2);

            //number of rows
             $num_rows = $query2->rowCount() ;
                //start buffer
                ob_start();
            if ($num_rows > 0)
             {
                //display items by name of category
                include "templates/productsBycategoryName.html.php";
             }else {
                 //display not found items by category
                include "templates/notFoundItems.html.php";
             }
     }


    $output = ob_get_clean();
    //layout
    include "templates/layout.html.php";
    $pdo = null;
?>