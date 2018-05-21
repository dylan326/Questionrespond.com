<?php
      
include('databaseClass.php');
//create object
$databaseClass = new databaseClass();
//call connect method so I can use for query
$connect = $databaseClass->connect();
           
header("Content-Type: application/json; charset=UTF-8");
$obj = json_decode($_GET["x"], false);

//make specific results set and encode them to JSON. Results show users their questions and answers
$result = $connect->query("SELECT answer, q_id, a_date, cuser FROM ".$obj->table."");
$outp = array();
$outp = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);
        
?>
