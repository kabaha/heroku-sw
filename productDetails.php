<?php

require_once("classes/ConnectDatabase.php");
$title='Search Page';
$pageHeading = "";  

//get database settings
include "settings/db.php";

//create databse object
$db = new ConnectDatabase($dsn,$username,$password);


    //check if there is a query string field id
    if (isset($_GET["id"]))
     {
            //connect to database
            $pdo = $db->Connect();

    //retrieve Items name
    /* $sql_query="select  i.ItemID,i.CategoryID,i.ItemName,i.PhotoPath as 'sm_img',
                i.Price,i.SalePrice,i.`Description`,i.Featured,iv.PhotoPath as 'lg_img'
    from Items as i
    INNER JOIN item_views as iv  ON iv.ItemID = :id
    where  i.ItemID IN (SELECT iv.ItemID from item_views as iv where iv.ItemID = :id)"; for localhost*/

    $sql_query="select  i.ItemID,i.CategoryID,i.ItemName,i.PhotoPath as 'sm_img',
                i.Price,i.SalePrice,i.`Description`,i.Featured,iv.PhotoPath as 'lg_img'
    from items as i
    INNER JOIN item_views as iv  ON iv.ItemID = :id
    where  i.ItemID IN (SELECT iv.ItemID from item_views as iv where iv.ItemID = :id)";
    // $sql_query="select * from Items as i
    // INNER JOIN item_views as iv  ON iv.ItemID = :id
    // where  i.ItemID IN (SELECT iv.ItemID from item_views as iv where iv.ItemID = :id)";


            // $sql_query="select * from Items where ItemID = :id";
            $query = $pdo->prepare($sql_query);
            $query->bindValue(":id", $_GET["id"]);
            $rows = $db->ExecuteSQL($query);

            //test
            // echo '<pre>';
            // var_dump($rows);

            //number of rows
             $num_rows = $query->rowCount() ;
                //start buffer
                ob_start();
            if ($num_rows > 0)
             {
                //display items by name of category
                include "templates/productDetails.html.php";
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