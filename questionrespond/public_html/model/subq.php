<?php
   session_start();
    include('databaseClass.php');
    //create object
    $databaseClass = new databaseClass();
    
    //prevent XXS attacks
    $questionWash = $databaseClass->wash($_POST['question']);
    
    //grab session varibles so it's possible to submit question correctly.
    $uname = $_SESSION['username'];
    $qa_email =$_SESSION['email'];
    
   //method to insert question is called
    $questionSubmitted = $databaseClass->subq($questionWash, $uname, $qa_email);
    
    if ($questionSubmitted == true)
    {  
        header ('Location: ../yourqs.php');
    }
    else 
    {
        echo "Error contact administrator" ;
    }
    
    
 ?>
