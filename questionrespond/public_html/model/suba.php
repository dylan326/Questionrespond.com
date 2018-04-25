
<?php

    session_start();
   //include('controller/checker.php');
    include('databaseClass.php');
    $databaseClass = new databaseClass();
    
    //$connect = $dbopen->connect();
    
   
    $answerWash = $databaseClass->wash($_POST['answer']);
    
    $q_id = $_POST["type"];
    
    $qa_question = $_POST['qa_question'];
    
    $qa_username = $_POST['qa_username'];
    
    $username = $_SESSION["username"];
    
    
    $answerSubmitted = $databaseClass->suba($answerWash, $q_id, $username, $qa_question, $qa_username);
    
    if ($answerSubmitted == true)
    {
        header("Location: ../totalqs.php?q_id=$q_id&question=$qa_question'&username=$qa_username");
    }
    else 
    {
        echo "Error: contact administrator";
    }
    
   
?>