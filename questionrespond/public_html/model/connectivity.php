<?php
    session_start();
    include('databaseClass.php');
    
    $databaseClass = new databaseClass();
    
    //$connect = $dbopen->connect();
    
    $usernameWashed = $databaseClass->wash($_POST['username']);
    
    $passwordWashed = $databaseClass->wash($_POST['password']);
    
   
    
   $isValid = $databaseClass->login($usernameWashed, $passwordWashed);
    
    if ($isValid == true)
       {
            
            header("Location: ../ask.php");
        }
        else 
        {
            header("refresh:5; url=../index.html");
            echo "Wrong login ID.  Re-directing to login page....";
        }
    
    
?>