<?php

session_start();
include('controller/checker.php');

?>
<html>
    <head><title>Search for a question</title>
    <link rel="stylesheet" type="text/css" href="./view/css/style.css">
    
    <link rel="shortcut icon" href="view/images/qmarkicon.ico" type="image/x-icon">
    <script type="text/javascript" src="controller/suggestionAJAX.js"></script>
    <script type = "text/javascript"
            src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="./view/logout.js"></script>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    
    <br /> 
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
  
          
    <center>
        <h2>Search for a Question</h2>
    </center>
    
      <!--JSON Call here-->
        <div class="askbar"><form action = "#" method="post">
            <center><input type="text" name = "query" size='70' style="height: 30px;" placeholder='Search...' id='searchajax' onKeyUp="search_ajax()"><span class="glyphicon glyphicon-search" style ="color: black;"></span></center></div><br />
            <div id="suggestion"></div>
            
        </form>
    

    
    </body>
</html>
