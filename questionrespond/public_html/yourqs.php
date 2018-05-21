<?php
session_start();
include('controller/checker.php');

?>

<html>
    <head><title>Your Questions</title>
    <link rel="stylesheet" type="text/css" href="./view/css/style.css">
   
    <link rel="shortcut icon" href="view/images/qmarkicon.ico" type="image/x-icon">
    <script src="controller/yourqsJSONcall.js"></script>
    
    <script type = "text/javascript"
            src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   
  
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body><hr>
    
    
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" >Questionrespond.com</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="ask.php">Ask a Question</a></li>
     
     
      <li><a href="search.php">Search or Answer</a></li>
      <li><a href="yourqs.php">Your Questions</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="index.html" style = "color: #00FFFF;"><span class="glyphicon glyphicon-log-in" style ="color: #00FFFF;"></span> Logout</a></li>
    </ul>
  </div>
</nav>
 <div id="username_grab" style ="visibility: hidden;"><?php echo $_SESSION['username']; ?></div>
  <center><h2>Hello <?php echo $_SESSION['username']; ?></h2></center>
  <h4 style ="  border-style: none; 
    padding: 25px;
    background-color: #1E90FF;
    margin-left: 100px;
    margin-right: 100px;
    border-radius: 7px;
    color: white">Here are your questions</h4>
            <hr>
    
       <p id = "yourqs"></p>
       
 
    </body>
</html>

