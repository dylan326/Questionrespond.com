
<?php

    session_start();
   
    include('databaseClass.php');
    //create object
    $databaseClass = new databaseClass();
    
    $answerWash = $databaseClass->wash($_POST['answer']);
    
    $q_id = $_POST["type"];
    
    $qa_question = $_POST['qa_question'];
    
    $qa_username = $_POST['qa_username'];
    
    $username = $_SESSION["username"];
    
    //call suba method and submit an answer to a question
    $answerSubmitted = $databaseClass->suba($answerWash, $q_id, $username, $qa_question, $qa_username);
    
    if ($answerSubmitted == true)
    {
        //once submitted it re-directs back to totalqs
        header("Location: ../totalqs.php?q_id=$q_id&question=$qa_question'&username=$qa_username");
    }
    else 
    {
        echo "Error: contact administrator";
    }
    
   
?>
