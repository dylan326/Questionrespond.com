<?php
    
    include('databaseClass.php');
    //create object
    $databaseClass = new databaseClass();
    
    //prevent XXS attacks with wash function
    $usernameWashed = $databaseClass->wash($_POST['username']);

    $emailWashed = $databaseClass->wash($_POST['email']);

    $passwordWashed = $databaseClass->wash($_POST['password']);
        
    //function to add user

    $userAdded = $databaseClass->insertuser($usernameWashed, $passwordWashed, $emailWashed);
   
    if($userAdded == true)
    {
        header("refresh:3; url=../index.html");
        echo "New account created, re-directing to login page.  Please hold...";
            
    }
    else 
    {
        header("refresh:5 url=../index.html");
        echo "Error:  Username is taken, please pick another username.  Re-directing to create account page, please hold...";
            
    }
   

   
    
?>
