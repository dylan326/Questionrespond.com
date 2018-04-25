<?php
   session_start();
    include('databaseClass.php');
    
    $databaseClass = new databaseClass();
    //$connect = $dbopen->connect();
    
    $questionWash = $databaseClass->wash($_POST['question']);
    
    
    $uname = $_SESSION['username'];
    $qa_email =$_SESSION['email'];
    
    $questionSubmitted = $databaseClass->subq($questionWash, $uname, $qa_email);
    
    if ($questionSubmitted == true)
    {  
        header ('Location: ../yourqs.php');
    }
    else 
    {
        echo "Error contact administrator" ;
    }
    
    //$connect->close();
 ?>