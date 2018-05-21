<?php
    session_start();
    include('databaseClass.php');
    //create object
    $databaseClass = new databaseClass();
    //prevent XXS Attacks
    $usernameWashed = $databaseClass->wash($_POST['username']);
    
    $passwordWashed = $databaseClass->wash($_POST['password']);
    
   
    //login function
   $isValid = $databaseClass->login($usernameWashed, $passwordWashed);
    //if the function returns true or false,  log in or not
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
