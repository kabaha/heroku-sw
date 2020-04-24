
<?php

require_once("classes/ConnectDatabase.php");
 $title='Home Page';
 $pageHeading = "";  
 
 //get database settings
 include "settings/db.php";

 //create databse object
 $db = new ConnectDatabase($dsn,$username,$password);

 //connect to database
 $pdo = $db->Connect();

    //set up sql query
    //$sql_query="select * from Items"; /* for localhost db  */
    $sql_query="select * from items"; /* for outside db connect  */
    $query = $pdo->prepare($sql_query);
    
    //execute sql
    //notes:the good thinks to make name rows as categorys more easy to understand
    $rows = $db->ExecuteSQL($query);
 
    
 ob_start();
 //display home page
 include "templates/index.html.php";

 
 $output = ob_get_clean();
 include "templates/layout.html.php";
?>






