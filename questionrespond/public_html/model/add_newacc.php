<?php
    
    include('databaseClass.php');

    $databaseClass = new databaseClass();
    
    $usernameWashed = $databaseClass->wash($_POST['username']);

    $emailWashed = $databaseClass->wash($_POST['email']);

    $passwordWashed = $databaseClass->wash($_POST['password']);
        
    //$connect = $dbopen->connect();

    $userAdded = $databaseClass->insertuser($usernameWashed, $passwordWashed, $emailWashed);
   
    if($userAdded == true)
    {
        header("refresh:3; url=../index.html");
        echo "New account created, re-directing to login page.  Please hold...";
            
    }
    else 
    {
        header("refresh:11 url=../index.html");
        echo "Error:  Username is taken, please pick another username.  Re-directing to create account page, please hold...";
            
    }
   

   
    
?>