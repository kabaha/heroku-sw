<?php

require_once("classes/ConnectDatabase.php");
 $title='Search Page';
 $pageHeading = "";  
 
 //get database settings
 include "settings/db.php";

 //create databse object
 $db = new ConnectDatabase($dsn,$username,$password);

 
 
 //check if the search button has been pressed
 if (isset($_GET["btn_search"]) && isset($_GET["search"]))
 {
     $inputSearch = $_GET["search"];
        //connect to database
        $pdo = $db->Connect();

                        //retrieve category name
                        $sql_query="select CategoryID from categories where CategoryName like :cat";
                        $query = $pdo->prepare($sql_query);
                        $query->bindValue(":cat", "%$inputSearch%");
                                //execute sql
                        $cat_rows = $db->ExecuteSQL($query);
                        $id_arr=array_column($cat_rows,0);
                        if (count($id_arr)  > 0)
                        {
                                $id=$id_arr[0];
                        }else {
                                $id=0;
                        }
                        // print_r($id);
                        // var_dump($id);
                        // var_dump(count($id_arr));

        //set up sql query
       // $sql_query="select * from Items where ItemName like :itemname or CategoryID = :id"; /* localhost db */
        $sql_query="select * from items where ItemName like :itemname or CategoryID = :id";
        $query = $pdo->prepare($sql_query);
        $query->bindValue(":itemname", "%$inputSearch%", PDO::PARAM_STR);
        $query->bindValue(":id","$id", PDO::PARAM_INT);

        //notes:the good thinks to make name rows as categorys more easy to understand
        $rows = $db->ExecuteSQL($query); //execute sql

       //number of rows
        $num_rows = $query->rowCount() ;

        ob_start();
            if ($num_rows > 0) {
                    //display items
                    include "templates/items.html.php";
            }else {
                    //display resul not found
                    include "templates/searchResult.html.php";
            }
    }

    $output = ob_get_clean();
    include "templates/layout.html.php";
?>