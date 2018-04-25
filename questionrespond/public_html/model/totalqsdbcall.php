<?php
      
include('databaseClass.php');

$databaseClass = new databaseClass();

$connect = $databaseClass->connect();
           
header("Content-Type: application/json; charset=UTF-8");
$obj = json_decode($_GET["x"], false);


$result = $connect->query("SELECT answer, q_id, a_date, cuser FROM ".$obj->table."");//where username = $username");
$outp = array();
$outp = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);
        
?>